<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actividad->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actividad->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actividad'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Destacado'), ['controller' => 'Destacado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Destacado'), ['controller' => 'Destacado', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profesor'), ['controller' => 'Profesor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profesor'), ['controller' => 'Profesor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actividad form large-9 medium-8 columns content">
    <?= $this->Form->create($actividad) ?>
    <fieldset>
        <legend><?= __('Edit Actividad') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('titulo');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('fecha_ini');
            echo $this->Form->input('fecha_fin');
            echo $this->Form->input('trimestre');
            echo $this->Form->input('financiacion');
            echo $this->Form->input('esta_evaluada');
            echo $this->Form->input('attachment');
            echo $this->Form->input('attachment_dir');
            echo $this->Form->input('curso._ids', ['options' => $curso]);
            echo $this->Form->input('profesor._ids', ['options' => $profesor]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
