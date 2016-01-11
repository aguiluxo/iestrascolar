<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evaluacion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evaluacion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Evaluacion'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evaluacion form large-9 medium-8 columns content">
    <?= $this->Form->create($evaluacion) ?>
    <fieldset>
        <legend><?= __('Edit Evaluacion') ?></legend>
        <?php
            echo $this->Form->input('id_actividad');
            echo $this->Form->input('participacion');
            echo $this->Form->input('objetivos');
            echo $this->Form->input('valoracion');
            echo $this->Form->input('repetir');
            echo $this->Form->input('mejoras');
            echo $this->Form->input('incidencias');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
