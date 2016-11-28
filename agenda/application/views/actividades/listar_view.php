<?php 
	$this->load->view('masterpage/head');
	$this->load->view('masterpage/nav');
 ?>

 <div class="row">
 	<div class="col-md-12">
 		<table class="table">
 			<thead>
 				<tr>
 					<th>Id</th>
 					<th>Nombres</th>
 					<th>Apellidos</th>
 					<th>Documento</th>
 					<th>Email</th>
 					<th>Teléfono</th>
 					<th>Descripción</th>
 					<th>Acciones</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php foreach ($actividades as $row): ?>
 					<tr>
 						<td><?php echo $row->id; ?></td>
 						<td><?php echo $row->nombres; ?></td>
 						<td><?php echo $row->apellidos; ?></td>
 						<td><?php echo $row->documento; ?></td>
 						<td><?php echo $row->email; ?></td>
 						<td><?php echo $row->telefono; ?></td>
 						<td><?php echo $row->descripcion; ?></td>
 						<td><button type="button" class="btn btn-primary">Editar</button> <button type="button" class="btn btn-danger">Eliminar</button></td>
 					</tr>
 				<?php endforeach; ?>

 			</tbody>
 		</table>
 	</div>
 </div>
 <?php $this->load->view('masterpage/footer'); ?>