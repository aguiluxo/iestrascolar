<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Trimestre'), ['action' => 'edit', $trimestre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Trimestre'), ['action' => 'delete', $trimestre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trimestre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Trimestre'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trimestre'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trimestre view large-9 medium-8 columns content">
    <h3><?= h($trimestre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($trimestre->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Trimestre') ?></th>
            <td><?= $this->Number->format($trimestre->trimestre) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Inicio') ?></th>
            <td><?= h($trimestre->fecha_inicio) ?></tr>
        </tr>
        <tr>
            <th><?= __('Fecha Fin') ?></th>
            <td><?= h($trimestre->fecha_fin) ?></tr>
        </tr>
    </table>
</div>
