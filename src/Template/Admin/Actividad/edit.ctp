<?php $this->start('script');?>
	<script>
		function actualizaFechaFin() {
			if($('#fecha_findatetimepicker').val() ==""){
				var fecha = $('#fecha_inidatetimepicker').val();
				console.log(fecha);
				fecha = fecha.split(' ');
				var time = fecha[1];
				time = time.split(':')
				fecha = fecha[0].split('-');
				time = Number(time[0])+1 + ":" + time[1];
				var fechaFormateada = fecha[2] + "-" + fecha[1] + "-" + fecha[0] + " " + time;
				$('#fecha_fincake').val(fechaFormateada);
				$('#fecha_findatetimepicker').val(fecha[0] + "-" + fecha[1] + "-" + fecha[2] + " " + time);
			}
		}
	</script>
<?php $this->end();?>
<div class="row">
	<?=$this->Form->create($actividad, ['class' => 'form-horizontal'])?>
   <div class="col-lg-6">
		<div class="well bs-component">
			<fieldset>
			  <legend><?= $this->action =='add' ?__('Añadir Actividad'):__('Editar Actividad')?></legend>
			  <div class="form-group">
				<label for="tituloInput" class="col-lg-2 control-label"><?= __('Título') ?></label>
				<div class="col-lg-10">
					<?=$this->Form->input('titulo', ['label' => false, 'id' => 'tituloInput']);?>
				</div>
			  </div>
			  <div class="form-group">
				<label for="fecha_inidatetimepicker" class="col-lg-2 control-label">
					<?= __('Inicio') ?> <i class="fa fa-calendar"></i>
				</label>
				<div class="col-lg-10">
					<?=$this->Munruiz->datetimepicker('fecha_ini', ['label' => false], ['label' => false], "actualizaFechaFin()");?>
				</div>
			  </div>
			  <div class="form-group">
				<label for="fecha_findatetimepicker" class="col-lg-2 control-label">
					<?= __('Fin') ?> <i class="fa fa-calendar-o"></i>
				</label>
				<div class="col-lg-10">
					<?=$this->Munruiz->datetimepicker('fecha_fin', ['label' => false]);?>
				</div>
			  </div>
			  <div class="form-group">
				<label for="descripcionInput" class="col-lg-2 control-label"><?=__('Descripción')?></label>
				<div class="col-lg-10">
				  <?=$this->Form->input('descripcion', [
					  'type' => 'textarea',
					  'label' => false,
					  'id' => 'descripcionInput'
				   ]);?>
				  <span class="help-block">
					<?= __('Introduce el contenido que quieres que se refleje en el resumen de la actividad')?>
				  </span>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-lg-2 control-label">Trimestre</label>
				<div class="col-lg-10">
				  <div class="radio contenedorTrimestre">
					<?=$this->Form->radio('trimestre',[
							['value' => 1, 'text' => '1'],
							['value' => 2, 'text' => '2'],
							['value' => 3, 'text' => '3']
					], ['class' => 'botonesTrimestre'])?>
				  </div>
				</div>
			  </div>
			  <div class="checkbox">
					<label>
					  <?= $this->Form->checkbox('financiacion'); ?> Financiación
					</label>
			  </div>
			  <div class="checkbox">
			  		<label>
	  					<?= $this->Form->checkbox('destacada'); ?> Destacada
			  		</label>
			  </div>
			</fieldset>
		</div>
	</div>
	<div class="col-lg-6 contenedorCursos">
		<div class="well bs-component">
			<fieldset>
				<legend>Cursos que asistirán</legend>
				<div class="form-group">
					<div class="col-xs-12">
						<?= $this->Form->input('curso._ids', [
							'options' => $curso,
							'multiple' => 'checkbox']); ?>
					</div>
				</div>
			</fieldset>
		</div>
	</div>

	<div class="col-lg-6 contenedorProfesores">
		<div class="well bs-component">
			<fieldset>
				<legend>Profesores que asistirán</legend>
				<div class="form-group">
					<div class="col-xs-12">
						<?= $this->Form->input('profesor._ids', [
							'options' => $profesores,
							'multiple' => 'checkbox',
							'class' => 'dosColumnas',
							'label' => false]); ?>
					</div>
				</div>
			</fieldset>
		</div>
	</div>


</div>
<div class="row">
	<div class="col-xs-12">
		<button>Cancelar</button>
		<?=$this->Form->button(__('Enviar'))?>
	</div>
</div>
<?= $this->Form->end(); ?>