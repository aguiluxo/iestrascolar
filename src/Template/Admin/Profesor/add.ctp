<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Profesor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departamento'), ['controller' => 'Departamento', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamento', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profesor form large-9 medium-8 columns content">
    <?= $this->Form->create($profesor, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Profesor') ?></legend>
        <?php
            echo $this->Form->input('departamento_id', ['options' => $departamento, 'empty' => true]);
            echo $this->Form->input('nombre');
            echo $this->Form->input('email');
            echo $this->Form->input('password', ['label' => __('Contraseña')]);
            echo $this->Form->input('role', [
            'label' => __('Rol'),
            'empty' => 'Seleccione el tipo de usuario',
            'options' => ['superadmin' => 'Super Administrador', 'admin' => 'Administrador', 'profesor' => 'Profesor']
            ]);
            echo $this->Form->input('telefono');
            echo $this->Form->input('imagen', ['type' => 'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
