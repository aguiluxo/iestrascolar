<div class="busqueda">
	<?php
	echo $this->Form->create('Activity', array(
		'type' => 'GET',
		'class' => 'navbar-form navbar-left',
		'url' => array('controller' => 'main',
			'action' => 'search'
			)
		)
	);
	?>
	<div class="form-group">
		<?php echo $this->Form->input('search', array(
			'label' =>false,
			'div' => false,
			'id' => 'inputBusqueda',
			'class' => 'form-control',
			'autocomplete' => 'off',
			'placeholder' => 'Busca una actividad...'
			));?>
		</div>
		<?php echo $this->Form->button('<i class="fa fa-search"></i>', array(
			'class' => 'botonBusqueda')); ?>
			<?php echo $this->Form->end(); ?>
		</div>
