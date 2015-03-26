<?= form_open('agenda/update', array('class'=>'form-horizontal form-inline')); ?>
	<legend> Actualizar Actividad </legend>

	<?php 	 	 
			$ambito=array('Local'=>'Local','Regional'=>'Regional','Nacional'=>'Nacional','Internacional'=>'Internacional'); 
			$tipo=array('Academico'=>'Academico','Institucional'=>'Institucional','Cultural'=>'Cultural','Empresarial'=>'Empresarial','Recreativo'=>'Recreativo','Deportivo'=>'Deportivo');
			$categoria=array('Firmas'=>'Firma de Convenio',
			  				   'Audiencia'=>'Audiencia',
			  				   'Sesión de Consejo Ordinaria'=>'Sesión de Consejo Ordinaria',
			  				   'Sesión de Consejo Extraordinaria'=>'Sesión de Consejo Extraordinaria',
			  				   'Invitación Capacitacion'=>'Invitación Capacitacion',
			  				   'Invitación Talleres'=>'Invitación Talleres',
			  				   'Invitación Aniversarios'=>'Invitación Aniversario',
			  				   'Inauguración de Obras '=>'Inauguración de Obras',
			  				   'Colocación de Primera Piedra'=>'Colocación de Primera Piedra',
			  				   'Conferencias de Prensa '=>'Conferencias de Prensa ',
			  				   'Ceremonias'=>'Ceremonias',
			  				   'Eventos Otros'=>'Eventos Otros'
			  				   ); 
				  				   
			$derivado=array('Alcalde Distrital Med. Edgar Concori C.'=>'Alcalde Distrital Med. Edgar Concori C.',
							'1er Reg. Oscar Onque '=>'1er Reg. Oscar Onque',
				  			'Ing. Elmer Robles P. (G.M.)'=>'Ing. Elmer Robles Payehuanca (G.M.)',
				  			'Abg. Jose M. Coaquera C.(Asesoria Legal)'=>'Abg. Jose M. Coaquera C. (Ases.Legal)',
				  			'CPC Juan F. M. Aranibar R. (G. Planeamiento y Presupuesto)'=>'CPC Juan F. Aranibar R. (G.P.Psto)',
				  			'CPC Magdalena M. Mamani C. (G. Administración)'=>'CPC Magdalena M. Mamani C. (G.Adm.)',
				  			'Ing. Edy J. Aduvire V. (G. Desarrollo Económico Social) '=>'Ing. Edy J. Aduvire V.(G.D.E.S) ',
				  			'Ing. Coilberto C. Nina M. (G. de Ingeniería)'=>'Ing. Coilberto C. Nina M. (G.Ing.)');
			  ?>


	<?= my_validation_errors(validation_errors()); ?>

		<div class="control-group hidden">
		<?= form_label('ID', 'id', array('class'=>'control-label')); ?>
		<span class="uneditable-input hidden"><?= $registro->id ;?></span>
		<?= form_hidden('id', $registro->id); ?>
		</div>
		
		<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Oficio</label>
			<?= form_input(array('type'=>'text','name'=>'oficio','id'=>'oficio', 'value'=>$registro->oficio)); ?>
		</div>
		<br>
		<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Institución (Procedencia)</label>
			<?= form_input(array('type'=>'text','name'=>'procedencia','id'=>'procedencia', 'value'=>$registro->procedencia)); ?>
		</div>
		<br>
		<br>
		<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Asunto (evento):</label>
			<?= form_input(array('type'=>'text','name'=>'evento','id'=>'evento', 'value'=>$registro->evento)); ?>
		</div>
		<br>
		<div class="control-group">
		
			<label for="inputEmail3" class="col-sm-3 control-label">Ámbito</label>
			<?= form_dropdown('ambito',$ambito,array('class'=>'control-label','value'=>$registro->ambito)); ?>
		</div>
		<br>
	
		<div class="control-group">
		
			<label for="inputEmail3" class="col-sm-3 control-label">Tipo</label>
			<?= form_dropdown('tipo',$tipo,array('class'=>'control-label','value'=>$registro->tipo)); ?>
		</div>
		<br>
		<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Categoría</label>
			<?= form_dropdown('categoria',$categoria,array('class'=>'control-label','value'=>$registro->categoria)); ?>
		</div>
		<br>
		<div class="control-group">

			<label for="inputEmail3" class="col-sm-3 control-label">Fecha</label>
			<?= form_input(array('type'=>'text','name'=>'fecha','id'=>'datetimepicker1','value'=>$registro->fecha)); ?>
		</div>
		<br>

		<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Hora Inicio</label>
			<?= form_input(array('type'=>'text','name'=>'hora','id'=>'datetimepicker2','value'=>$registro->hora)); ?>
		</div>
		<br>
		<!-- 
		<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Hora Fin</label>
			<?= form_input(array('type'=>'text','name'=>'duracion','id'=>'datetimepicker3','value'=>$registro->duracion)); ?>
		</div>
		<br> -->
		<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Lugar</label>
			<?= form_input(array('type'=>'text','name'=>'lugar','id'=>'lugar','value'=>$registro->lugar)); ?>
		</div>
		<br>

		<div class="control-group ">
			<label for="inputEmail3" class="col-sm-3 control-label">Descripción</label>
			<?= form_textarea(array('class'=>'descripcion','type'=>'text','name'=>'descripcion','id'=>'descripcion','placeholder'=>'Descripción....','value'=>$registro->descripcion)); ?>
		</div>			
		<br>		
		
		<?php if (  $registro->asistencia == '1' ) 

                    {  
                        ?>                        
			<div class="control-group">
				<div class="table">
					<tr>
						<td><label for="inputEmail3" class="col-md-3">Desea Derivar? : </label></td>
					
						
						<td>si <?= form_checkbox(array('type'=>'checkbox','name'=>'asistencia','id'=>'campo1','value'=>$registro->asistencia,'checked' => TRUE)); ?></td>
						
					</tr>
				</div>			
			</div>
			<br>

			<div class="control-group campo" id="campo">
				<label for="inputEmail3" class="col-md-3">Derivado A : </label>
				<?= form_dropdown('derivado',$derivado,array('class'=>'control-label','value'=>$registro->derivado)); ?>
			</div>
			<br>

		  <?php     
                    }           	?>


        <?php if (  $registro->asistencia == '0' ) 

                    {   
                        ?>
		
			<div class="control-group">
				<div class="table">
					<tr>
						<td><label for="inputEmail3" class="col-md-3">Desea Derivar? : </label></td>
					
						
						<td>si <?= form_checkbox(array('type'=>'checkbox','name'=>'asistencia','id'=>'campo1','value'=>$registro->asistencia,'checked' => FALSE)); ?></td>
						
					</tr>
				</div>			
			</div>
			<br>

			<div class="control-group box campo" id="campo">
				<label for="inputEmail3" class="col-md-3">Derivado A : </label>
				<?= form_dropdown('derivado',$derivado,array('class'=>'control-label','value'=>$registro->derivado)); ?>
			</div>
			<br>

		  <?php     
                    }           	?>

  
                 

    <center>	
  	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('agenda/index', 'Cancelar', array('class'=>'btn btn-success')); ?>
		<?= anchor('agenda/delete/'.$registro->id , 'Eliminar', array('class'=>'btn btn-warning','onClick'=>"return confirm('¿Está Seguro?')")); ?>	
	</div>
	</center>
<?= form_close(); ?>
