<fieldset class="cajaBusqueda">
	<legend>Buscador de actividades</legend>
	<?=$this->Form->create(null);?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<?=$this->Form->input('q',['placeHolder' =>'Buscar por nombre o descripción', 'label' => false]);?>
			</div>
			<div class="col-md-6 contenedorBusquedaTrimestre">
					<span>Trimestre:</span>
					<?php
						echo $this->Form->radio('trimestre',[
							['value' => 1, 'text' => '1', 'style' => 'color:red;'],
							['value' => 2, 'text' => '2', 'style' => 'color:blue;'],
							['value' => 3, 'text' => '3', 'style' => 'color:green;']
						], ['class' => 'botonesTrimestre'])
					 ?>
			</div>
		</div>
		<div class="row">
			<fieldset><legend>Busca por fecha</legend>
			<div class="col-md-6">
				<?=$this->Munruiz->fecha('fecha_de',['label' => 'Desde...']);?>
			</div>
			<div class="col-md-6">
				<?=$this->Munruiz->fecha('fecha_a', ['label' => 'hasta...']);?>
			</div>
			</fieldset>

		</div>
	</div>
	<?php
		echo $this->Form->button('Buscar', ['type' => 'submit']);
		echo $this->Html->link('Restablecer', ['action' => 'index'], ['class' => 'btn btn-primary btn-lg botonRestablecer']);
		echo $this->Form->end();
		?>
</fieldset>