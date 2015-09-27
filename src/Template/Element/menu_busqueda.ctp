 <?php
 echo $this->Form->create(null);
// Match the search param in your table configuration
echo $this->Form->input('q',['placeHolder' =>'nombre', 'label' => false]);
echo $this->Form->button('Buscar', ['type' => 'submit']);
echo $this->Html->link('Restablecer', ['action' => 'index'], ['class' => 'btn btn-primary btn-lg']);
echo $this->Form->end();