<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo Profesor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Profesores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="profesor form large-9 medium-8 columns content">
    <?= $this->Form->create($profesor, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Editar Profesor') ?></legend>
        <?php
            echo $this->Form->input('departamento_id', ['options' => $departamento, 'empty' => true]);
            echo $this->Form->input('nombre');
            echo $this->Form->input('email');
            echo $this->Form->input('telefono');
            echo $this->Form->input('imagen', ['type' => 'file']);
            echo $this->Form->input('curso._ids', ['options' => $curso, 'multiple' => 'checkbox']);

        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
