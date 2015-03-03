
<table class="table table-hover table-condensed table-bordered" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Procedencia</th>
			<th>Evento</th>		
			<th>Descripcion</th>
			<th>Lugar</th>
			<th>Categoria</th>
			<th>Fecha</th>
			<th>Hora</th>
			<th>Asistio</th>
						
		</tr>
	</thead>	

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td><?= anchor('agenda/edit/'.$registro->id,$registro->id) ; ?></td>
			
			<td><?= $registro->procedencia ?></td>
			<td><?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></td>
			<td><?= $registro->descripcion ?></td>
			<td><?= $registro->lugar ?></td>
			<td><?= $registro->categoria ?></td>
			<td><?= $registro->fecha ?></td>
			<td><?= $registro->hora ?></td>
			<td><?= $registro->asistencia ?></td>
			
		
			
			
		</tr>

		<?php endforeach; ?>


	</tbody>
		

			

</table>

	<div class="form-actions">
				
				<?= anchor('agenda/index', 'regresar', array('class'=>'btn')); ?>
				</div>