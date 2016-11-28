<?php  
	$this->load->view('masterpage/head');
	$this->load->view('masterpage/nav');
?>

<?php echo form_open('Actividades/record') ?>
<h3>Prospectos</h3>
<div class="container">
	<div class="form-group col-md-6 col-lg-4 col-xs-12">
		<label>Nombres</label>
		<input type="text" name="nombres" class="form-control">
	</div>
	<div class="form-group col-md-6 col-lg-4 col-xs-12">
		<label>Apellidos</label>
		<input type="text" name="apellidos" class="form-control">
	</div>
	<div class="form-group col-md-12 col-lg-4 col-xs-12">
		<label>Documento</label>
		<input type="text" name="documento" class="form-control">
	</div>
	<div class="form-group  col-md-6 col-lg-4 col-xs-12">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group col-md-6 col-lg-4 col-xs-12">
		<label>Teléfono</label>
		<input type="text" name="telefono" class="form-control">
	</div>
	<div class="form-group col-md-12 col-lg-4 col-xs-12">
		<label>Foto</label>
		<input type="file" name="archivo" class="form-control">
	</div>
	<div class="form-group col-md-12 col-lg-12 col-xs-12">
		<label>Descripción</label>
		<textarea name="descripcion" class="form-control"></textarea>
	</div>

	<button type="submit" class="btn btn-success" name="btnEnviar" value="Registrar">Registrar</button>
	
	
</div>
</form>

<?php $this->load->view('masterpage/footer'); ?>