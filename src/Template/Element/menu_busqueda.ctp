<fieldset>
	<legend>Buscador de actividades</legend>

	 <?php
	 echo $this->Form->create(null);
	// Match the search param in your table configuration
	echo $this->Form->input('q',['placeHolder' =>'Buscar por nombre o descripción', 'label' => false]);
	?>
	<fieldset><legend>Busca por fecha</legend>
	<?php
	echo $this->Munruiz->fecha('fecha_de',['label' => 'Desde...']);
	echo $this->Munruiz->fecha('fecha_a', ['label' => 'hasta...']);
?>
	</fieldset>
	<fieldset>
		<legend>O por trimestre</legend>
		<?php
			echo $this->Form->radio('trimestre',[
				['value' => 1, 'text' => '1', 'style' => 'color:red;'],
				['value' => 2, 'text' => '2', 'style' => 'color:blue;'],
				['value' => 3, 'text' => '3', 'style' => 'color:green;']
			])
		 ?>

	</fieldset>
	<?php
		echo $this->Form->button('Buscar', ['type' => 'submit']);
		echo $this->Html->link('Restablecer', ['action' => 'index'], ['class' => 'btn btn-primary btn-lg']);
		echo $this->Form->end();
		?>
</fieldset>