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
        <li><?= $this->Html->link(__('List Departamento'), ['controller' => 'Departamento', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamento', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profesor form large-9 medium-8 columns content">
    <?= $this->Form->create($profesor) ?>
    <fieldset>
        <legend><?= __('Edit Profesor') ?></legend>
        <?php
            echo $this->Form->input('departamento_id', ['options' => $departamento, 'empty' => true]);
            echo $this->Form->input('nombre');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('role');
            echo $this->Form->input('telefono');
            echo $this->Form->input('imagen_dir');
            echo $this->Form->input('imagen');
            echo $this->Form->input('actividad._ids', ['options' => $actividad]);
            echo $this->Form->input('curso._ids', ['options' => $curso]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
