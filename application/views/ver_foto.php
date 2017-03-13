<?php 
	plantilla::inicio();

	$CI =& get_instance();

	$sql = "Select * From imagen where id = ?";
	$rs = $CI->db->query($sql, array($cod));

	$rs = $rs->result();
	if(count($rs)==0){
		redirect("web");
	}

	$imagen = $rs[0];
?>
	<div class="row">
		<div class="text-center col-xs-12">
			<h1><?php echo $imagen->nombre?></h1>
			<img align="middle" class="img-responsive" src="<?php echo base_url("fotos/{$imagen->id}.jpg"); ?>" />
			<div>
				<h3><?php echo $imagen->comentario;?></h3>
			</div>
		</div>
	</div>
