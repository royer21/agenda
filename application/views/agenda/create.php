
	<?= form_open('agenda/insert', array('class'=>'form-horizontal form-inline')); ?>
		<legend> <h1>Crear Actividad Oficial</h1>  </legend>

		<?= my_validation_errors(validation_errors()); ?>

			<?php $ambito=array('Local'=>'Local','Regional'=>'Regional','Nacional'=>'Nacional','Internacional'=>'Internacional'); 
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

			<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label"> Oficio : </label>
			<?= form_input(array('class'=>'form-control','type'=>'text','name'=>'oficio','id'=>'oficio','placeholder'=>'oficio....', 'value'=>set_value('oficio'))); ?>
			</div>
			<br>

			<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label"> Institución (Procedencia) :</label>
			<?= form_input(array('class'=>'form-control','type'=>'text','name'=>'procedencia','id'=>'procedencia','placeholder'=>'Procedencia....', 'value'=>set_value('procedencia'))); ?>
			</div>
			<br>
			<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label"> Asunto (Evento) :</label>
			<?= form_input(array('class'=>'form-control','type'=>'text','name'=>'evento','id'=>'evento','placeholder'=>'Evento....', 'value'=>set_value('evento'))); ?>
			</div>
			<br>
			<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label"> Ámbito :</label>
			<?= form_dropdown('ambito',$ambito,array('class'=>"dropdown-menu" )); ?>
			</div>
			<br>
			<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label"> Tipo :</label>
			<?= form_dropdown('tipo',$tipo,array('class'=>'control-label')); ?>
			</div>
			<br>
			<div class="control-group">
	
			<label for="inputEmail3" class="col-sm-3 control-label"> Categoría :</label>
			<?= form_dropdown('categoria',$categoria,array('class'=>'form-control')); ?>
			</div>
			<br>
			<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label"> Fecha :</label>
			<?= form_input(array('class'=>'form-control','type'=>'text','name'=>'fecha','id'=>'datetimepicker1')); ?>
			</div>
			<br>
			<div class="control-group">			
			<label for="inputEmail3" class="col-sm-3 control-label"> Hora Inicio :</label>
			<?= form_input(array('class'=>'block form-control','type'=>'text','name'=>'hora','id'=>'datetimepicker2')); ?>
			</div>
			<br>
			<!-- 
			<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label"> Hora Fin :</label>
			<?= form_input(array('class'=>'form-control','type'=>'text','name'=>'duracion','id'=>'datetimepicker3')); ?>
			</div>
			<br> -->
			<div class="control-group">
			<label for="inputEmail3" class="col-sm-3 control-label"> Lugar :</label>
			<?= form_input(array('class'=>'form-control','type'=>'text','name'=>'lugar','id'=>'lugar','placeholder'=>'Lugar....', 'value'=>set_value('lugar'))); ?>
			</div>
			<br>
			<div class="control-group ">
			<label for="inputEmail3" class="col-sm-3 control-label"> Descripción :</label>
			<?= form_textarea(array('class'=>'form-control','type'=>'text','name'=>'descripcion','id'=>'descripcion','placeholder'=>'Descripción....', 'value'=>set_value('descripcion'))); ?>
			</div>
			<br>

			<div class="control-group">
				<div class="table">
					<tr>
						<td><label for="inputEmail3" class="col-md-3">Desea Derivar? : </label></td>
						<td>si <?= form_input(array('type'=>'checkbox','name'=>'asistencia','id'=>'campo1','value'=>'1') );?></td>
					</tr>
				</div>			
			</div>

			<br>
			
			<div class="control-group box " id="campo">
			<label for="inputEmail3" class="col-sm-3 ">  Derivado A :</label>

			<?= form_dropdown('derivado',$derivado,array('class'=>"dropdown-menu" )); ?>
			</div>

		
			<br>
			<div class="control-group hidden">
			<?= form_label('Id de usuario', 'usuario_id', array('class'=>'control-label')); ?>
			<?= form_input(array('class'=>'checkbox','type'=>'text','name'=>'usuario_id','id'=>'usuario_id', 'value'=>$this->session->userdata('usuario_id'))); ?>
			</div>
			<br>

			<center>

				<div class="form-actions">
				<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
				<?= anchor('agenda/index', 'Cancelar', array('class'=>'btn btn-success')); ?>
				</div>

			</center>	

			
	<?= form_close(); ?>
