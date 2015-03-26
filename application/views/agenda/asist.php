<div>
	<h1>Eventos Asistidos </h1><small>Estuvo presente nuestro alcalde</small>
	<?= form_open('agenda/search_asist', array('class'=>'form-search')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar Eventos Asistidos', 'class'=>'input-medium search-query')); ?>
        <?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"> </i>', 'class'=>'btn')); ?>
    <?= form_close(); ?>
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
						<i class="glyphicon glyphicon-map-marker"></i>
						<strong>Lugar </strong>
						<?= $registro->lugar ?>
					</p>
					<p>
						<i class="glyphicon glyphicon-hand-right"></i>
						<strong>Derivado A : </strong>
						<?= $registro->derivado ?>
					</p>
				

			</div>
			<br>
				

		<?php endforeach; ?>

		<div class="form-actions">
			<?= anchor('agenda/index', 'regresar', array('class'=>'btn btn-success')); ?>
		</div>
	</div>

</div>