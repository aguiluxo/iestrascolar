<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Destacado'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="destacado form large-9 medium-8 columns content">
    <?= $this->Form->create($destacado) ?>
    <fieldset>
        <legend><?= __('Add Destacado') ?></legend>
        <?php
            echo $this->Form->input('actividad_id', ['options' => $actividad]);
                        echo $this->Munruiz->selectorIconos('icono',
                ['empty' => 'Selecciona icono para actividad destacada',
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
