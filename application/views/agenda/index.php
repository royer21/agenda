

	<?php
		 $opciones= array(
			'01'	=>	'Enero',
			'02'	=>	'Febrero',
			'03'	=>	'Marzo',
			'04'	=>	'Abril',
			'05'	=>	'Mayo',
			'06'	=>	'Junio',
			'07'	=>	'Julio',
			'08'	=>	'Agosto',
			'09'	=>	'Septiembre',
			'10'	=>	'Octubre',
			'11'	=>	'Noviembre',
			'12'	=>	'Diciembre'
		);
			$year = array(
			'2014'=>'2014',
			'2015'=>'2015'
		);
		 ?>
<div class="fechaactual">
	
	<script>
	var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
	var f=new Date();
	document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
	</script>
</div>
<br></br>


<br></br>


	<?= form_open('agenda/search_month_year', array('class'=>'form-search')); ?>
		<?= form_label('Mes', 'mes', array('class'=>'control-label')); ?>
		<?= form_dropdown('mes',$opciones);?>

		
		<?= form_label('A&ntilde;o', 'year', array('class'=>'control-label')); ?>
		<?= form_dropdown('year',$year);?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn btn-primary')); ?>
		<?= anchor('agenda/create','Agregar',array('class'=>'btn'))?>

	<?= form_close(); ?>

<?php foreach ($query as $registro): ?>


	<span class="edicion">
				<?= anchor('agenda/edit/'.$registro->id,'<i class="icon-edit"></i>') ; ?>
	</span >

	<span class="hora">	
		<h4> <?= $registro->hora ?>  </h4>	
		
	</span>
	<span class="fecha">	

			
			<?= $registro->fecha ?> 
							
		
				
		
	</span>


	<div class="evento">
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

<div>
	
	<?php echo $this->pagination->create_links();?>
</div>