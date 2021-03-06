<div class="fechaactual ">
     <h2><script>
     var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
     var f=new Date();
     document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] );
     </script> 
     </h2>
</div>

<div >

	 	<?= form_open('agenda/search', array('class'=>'form-search left')); ?>
			<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Evento', 'class'=>'input-medium search-query')); ?>
			<?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"> </i>', 'class'=>'btn btn-primary')); ?>
		<?= form_close(); ?>
  

		<?= form_open('agenda/today_events', array('class'=>'form-search left')); ?>
			<?= form_button(array('type'=>'submit', 'content'=>'Hoy', 'class'=>'btn btn-success')); ?>
		<?= form_close(); ?>

	
		<?= form_open('agenda/mes_events', array('class'=>'form-search left')); ?>
	        <?= form_button(array('type'=>'submit', 'content'=>'Mes', 'class'=>'btn btn-warning')); ?>
	    <?= form_close(); ?>

	    <?= form_open('agenda/next_events', array('class'=>'form-search')); ?>
	        <?= form_button(array('type'=>'submit', 'content'=>'Próximos', 'class'=>'btn btn-info')); ?>
	    <?= form_close(); ?>
	    
</div>
<br>

<div>
	<?php foreach ($query as $registro): ?>
		
		<div class="calendario display">
			<?= $dia = substr($registro->fecha, 8, 2); ?>
			<em>
			<span class="hidden">
			<?= $mes=substr($registro->fecha, 5, 2); 
			echo "</span>";
				switch ($mes) {  
					case '1':echo "Enero";break;
					case '2':echo "Febrero";break;
					case '3':echo "Marzo";break;
					case '4':echo "Abril";break;
					case '5':echo "Mayo";break;
					case '6':echo "Junio";break;
					case '7':echo "Julio";break;
					case '8':echo "Agosto";break;
					case '9':echo "Septiembre";break;
					case '10':echo "Octubre";break;
					case '11':echo "Noviembre";break;
					case '12':echo "Diciembre";break;
					default:break;
				}
			?>
		
			</em>
		</div>


		<div class="espaciado">
				<p class="evento mayuscula">
					<?php if ($this->session->userdata('usuario') == TRUE ) 
                            {
                                ?>
					<?= anchor('agenda/edit/'.$registro->id,'<i class="glyphicon glyphicon-edit"></i>') ; ?>
					  <?php
		                } ?>

					<?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?>
				</p>	
				<p>
					<i class="glyphicon glyphicon-time"></i>
					<strong>Hora </strong>
					
					<?= $registro->hora ?>
				</p>
				<p>
					<i class="glyphicon glyphicon-hand-right"></i>
					<strong>Institucion o Persona: </strong>
					<?= $registro->procedencia ?>
				</p>
				<p>
					<i class="glyphicon glyphicon-map-marker"></i>
					<strong>Lugar </strong>
					<?= $registro->lugar ?>
				</p>
				<?php if ($this->session->userdata('usuario') == TRUE ) 
                            {
                                ?>
				<p>
					<i class="glyphicon glyphicon-hand-right"></i>
					<strong>Derivado A : </strong>
					<?= $registro->derivado ?>
				</p>
			 <?php
		                } ?>

		</div>
		<br>
			

	<?php endforeach; ?>
</div>

<div>	
	<?php echo $this->pagination->create_links();?>
</div>