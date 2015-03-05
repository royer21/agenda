<div class="page-header">
	
	<h1>Control de Asistencia<small> Actividades Oficiales en la UNJBG</small></h1>
</div>

	<?= form_open('agenda/search', array('class'=>'form-search')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Evento', 'class'=>'input-medium search-query')); ?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn btn-primary')); ?>
		<?= anchor('agenda/create','Agregar',array('class'=>'btn'))?>
	<?= form_close(); ?>

	<?php foreach ($query as $registro): ?>
		
		<span class="hora">	
				<h4> <?= $registro->hora ?>  </h4>	
				
			</span>
			<span class="fecha">	

				<div>
					<?= $registro->fecha ?> 
								
				</div>
								
			</span>

			<div>
				<?= anchor('agenda/edit/'.$registro->id,'<i class="icon-edit"></i>') ; ?>
			</div>
			<div class="evento">
				
				<h4>Procedencia: <?= $registro->procedencia ?> </h4>
			
				<h4>Evento : <?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></h4>
				
				<div>
					<p>
						<strong>Descripcion</strong>
						<?= $registro->descripcion ?>
					  
					</p>
					<p>
						<strong>Lugar </strong>
						<?= $registro->lugar ?>
					</p>
				</div>
				
			</div>


	<?php endforeach; ?>




	<div class="form-actions">
				
				<?= anchor('agenda/index', 'regresar', array('class'=>'btn')); ?>
				</div>