<?php
	$CI =& get_instance();
	if(isset($_POST['submitForm'])){

		$foto = new stdClass();
		$foto->nombre = $_POST['nombre'];
		$foto->comentario = $_POST['comentario'];
		$foto->fecha = time();

		$CI->db->insert('imagen', $foto);
		$cod = $this->db->insert_id();

		$foto = $_FILES['imagen'];
		if($foto['error'] == 0 ){
			$tmp = "fotos/{$cod}.jpg";
			move_uploaded_file($foto['tmp_name'], $tmp);
		}
	}

	if(isset($_POST['submitFormUpdate'])){

		$foto = new stdClass();
		$foto->nombre = $_POST['nombre'];
		$foto->comentario = $_POST['comentario'];
		$foto->id = (int) $_POST['Id'];
		$foto->fecha = time();
		$data = array(
				'nombre' => $foto->nombre,
				'comentario' => $foto->comentario,
				'fecha' => $foto->fecha
			);
		$CI->db->where('id', $foto->id);
		$CI->db->update('imagen', $data);
		$cod = $foto->id;

		$foto = $_FILES['imagen'];
		if($foto['error'] == 0 ){
			$tmp = "fotos/{$cod}.jpg";
			move_uploaded_file($foto['tmp_name'], $tmp);
		}


	}

	if(isset($_POST['submitFormDelete'])){
		$foto = new stdClass();
		$foto->id = (int) $_POST['Id'];
		$CI->db->where('id', $foto->id);
		$CI->db->delete('imagen');
		$cod = $foto->id;
		unlink("fotos/{$cod}.jpg");
	}	

	plantilla::inicio();

?>
<div class="text-right">
	<a class="btn btn-danger" href="<?php echo base_url('admin/salir')?>">Salir</a>
</div>
<div class="row">
	<fieldset>
		<legend>
			Agregar Imagen
		</legend>
		<form enctype="multipart/form-data" method="post" action="">
			<div class="form-group input-group">
				<label class="input-group-addon">Nombre: </label>
				<input type="text" required name="nombre" class="form-control">
			</div>
			<div class="form-group input-group">
				<label class="input-group-addon">Comentario: </label>
				<textarea style="resize:vertical;" type="text" name="comentario" class="form-control"></textarea> 
			</div>
			<div class="form-group input-group">
				<label class="input-group-addon">Imagen: </label>
				<input required type="file" name="imagen" class="form-control"></input> 
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary" name="submitForm" >Guardar</button>
			</div>
		</form>
	</fieldset>
	<fieldset>
		<legend>
			Imagenes Agregadas
		</legend>
		<table class="table">
			<thead>
				<tr>
					<th>Img</th>
					<th>Cod</th>
					<th>Nombre</th>
					<th>Comentario</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$imagenes = cargar_imagenes();

					foreach ($imagenes as $imagen) {
						echo "<tr>
							<td><img src='fotos/{$imagen->id}.jpg' height='50' /></td>
							<td id='Id'>{$imagen->id}</td>
							<td>{$imagen->nombre}</td>
							<td>{$imagen->comentario}</td>
							<td><button type='button' class='btn btn-info btn-lg btnUpdate' data-toggle='modal' data-target='#myModal'>Modificar</button></td>
							<td>
								<form method='post' action='' onclick='validateDelete();'>
								<input type='text' id='txtIdDelete' name='Id'style='display:none'>
								<button type='submit' class='btn btn-danger btn-lg btnDelete' name='submitFormDelete'>Borrar</button>
								</form>
							</td>
						</tr>

						";
					}

				?>
			</tbody>
		</table>
	</fieldset>	
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Modifica una foto</h4>
	      </div>
	      <div class="modal-body">
	        <form enctype="multipart/form-data" method="post" action="">
				<div class="form-group input-group">
					<label class="input-group-addon">Nombre: </label>
					<input type="text" required name="nombre" class="form-control">
				</div>
				<div class="form-group input-group">
					<label class="input-group-addon">Comentario: </label>
					<textarea style="resize:vertical;" type="text" name="comentario" class="form-control"></textarea> 
				</div>
				<div class="form-group input-group">
					<label class="input-group-addon">Imagen: </label>
					<input required type="file" name="imagen" class="form-control"></input> 
				</div>
				<div class="form-group input-group">
					<label class="input-group-addon">Id: </label>
					<input required readonly type="text" name="Id" class="form-control" id="txtId"></input> 
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-primary" name="submitFormUpdate" >Actualizar</button>
				</div>
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(".btnUpdate").click(function(){
		var id = $(this).parent().parent().find("#Id").html();
		$("#txtId").val(id);
	});

	$(".btnDelete").click(function(){
		var id = $(this).parent().parent().parent().find("#Id").html();
		$(this).parent().find("#txtIdDelete").val(id);	
	});
});

function validateDelete(){
	var dat = confirm("Quiere borrar la imagen");
	return dat;
}

</script>