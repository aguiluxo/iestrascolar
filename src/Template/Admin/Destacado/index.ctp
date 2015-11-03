<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Destacado'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="destacado index large-9 medium-8 columns content">
    <h3><?= __('Destacado') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('actividad_id') ?></th>
                <th><?= $this->Paginator->sort('icono') ?></th>
                <th><?= $this->Paginator->sort('created', ['label' => 'Creado'] ) ?></th>
                <th><?= $this->Paginator->sort('modified', ['label' => 'Modificado']) ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($destacado as $destacado): ?>
            <tr>
                <td><?= $this->Number->format($destacado->id) ?></td>
                <td><?= $destacado->has('actividad') ? $this->Html->link($destacado->actividad->id, ['controller' => 'Actividad', 'action' => 'view', $destacado->actividad->id]) : '' ?></td>
                <td><i class="<?= h($destacado->icono) ?>"></i></td>
                <td><?= h($destacado->created) ?></td>
                <td><?= h($destacado->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $destacado->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $destacado->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $destacado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $destacado->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
