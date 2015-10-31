<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Destacado'), ['action' => 'edit', $destacado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Destacado'), ['action' => 'delete', $destacado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $destacado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Destacado'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Destacado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="destacado view large-9 medium-8 columns content">
    <h3><?= h($destacado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Actividad') ?></th>
            <td><?= $destacado->has('actividad') ? $this->Html->link($destacado->actividad->id, ['controller' => 'Actividad', 'action' => 'view', $destacado->actividad->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Icono') ?></th>
            <td><?= h($destacado->icono) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($destacado->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($destacado->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($destacado->modified) ?></tr>
        </tr>
    </table>
</div>
