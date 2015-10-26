<fieldset>
	<legend>Buscador de actividades</legend>

	 <?php
	 echo $this->Form->create(null);
	// Match the search param in your table configuration
	echo $this->Form->input('q',['placeHolder' =>'Buscar por nombre', 'label' => false]);
	echo $this->Munruiz->fecha('fecha_de',['label' => 'Buscar desde...']);
	echo $this->Munruiz->fecha('fecha_a', ['label' => 'hasta...']);

	echo $this->Form->button('Buscar', ['type' => 'submit']);
	echo $this->Html->link('Restablecer', ['action' => 'index'], ['class' => 'btn btn-primary btn-lg']);
	echo $this->Form->end();
	?>
</fieldset>