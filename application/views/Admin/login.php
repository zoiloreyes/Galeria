<?php
	$mensaje = '';
	if($_POST){
		$sql = "select * from usuario where correo = ? and clave = ?";
		$CI =& get_instance();

		$correo = $_POST['correo'];
		$clave = md5($_POST['clave']);

		$rs = $CI->db->query($sql,array($correo, $clave));
		$rs = $rs->result();

		if(count($rs)>0){
			$_SESSION['gale_user'] = $rs[0];
			redirect('admin');
		}else{
			$mensaje = "Mensaje o entrada no validos";
		}
	}
	plantilla::inicio()
?>

<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
		<form method="post" action="">
			<h3>Ingresa al sistema</h3>
			<div class="form-group input-group">
				<label class="input-group-addon">Correo</label>
				<input type="text" name="correo" class="form-control">
			</div>
			<div class="form-group input-group">
				<label class="input-group-addon">Clave</label>
				<input type="password" name="clave" class="form-control">
			</div>
			<div style="color:red">
				<?php echo $mensaje ?>
			</div>
			<div class="text-center">
				<button class="btn btn-primary">Ingresar</button>
			</div>

		</form>
	</div>

</div>