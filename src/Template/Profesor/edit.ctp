<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profesor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Profesor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departmento'), ['controller' => 'Departmento', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departmento'), ['controller' => 'Departmento', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profesor form large-9 medium-8 columns content">
    <?= $this->Form->create($profesor) ?>
    <fieldset>
        <legend><?= __('Edit Profesor') ?></legend>
        <?php
            echo $this->Form->input('departamento_id', ['options' => $departmento, 'empty' => true]);
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('nombre');
            echo $this->Form->input('apellidos');
            echo $this->Form->input('telefono');
            echo $this->Form->input('imagen_dir');
            echo $this->Form->input('imagen');
            echo $this->Form->input('actividad._ids', ['options' => $actividad]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
