<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trimestre->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trimestre->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Trimestre'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trimestre form large-9 medium-8 columns content">
    <?= $this->Form->create($trimestre) ?>
    <fieldset>
        <legend><?= __('Edit Trimestre') ?></legend>
        <?php
            echo $this->Form->input('trimestre');
            echo $this->Form->input('fecha_inicio', ['empty' => true, 'default' => '']);
            echo $this->Form->input('fecha_fin', ['empty' => true, 'default' => '']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
