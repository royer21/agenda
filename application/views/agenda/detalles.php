<div class="page-header">
	
	<h1> Actividades Oficiales  </h1>
</div>	
<div>
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
				<p class="evento mayuscula ">
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
					<i class="glyphicon glyphicon-map-marker"></i>
					<strong>Procedencia </strong>
					<?= $registro->procedencia ?>
				</p>
				<p>
					<i class="glyphicon glyphicon-map-marker"></i>
					<strong>Ambito </strong>
					<?= $registro->ambito ?>
				</p>
				<p>
					<i class="glyphicon glyphicon-map-marker"></i>
					<strong>Tipo </strong>
					<?= $registro->tipo ?>
				</p>
				<p>
					<i class="glyphicon glyphicon-map-marker"></i>
					<strong>Oficio </strong>
					<?= $registro->oficio ?>
				</p>
				<p>
					<i class="glyphicon glyphicon-hand-right"></i>
					<strong>Derivado A : </strong>
					<?= $registro->derivado ?>
				</p>
				<p>
					<i class="glyphicon glyphicon-align-justify"></i>
					<strong>Descripción : </strong>
					<?= $registro->descripcion ?>
				</p>

		</div>
		
</div>

<div class="form-actions">
	<?= anchor('agenda/index', 'Regresar', array('class'=>'btn btn-success')); ?>
</div>




