<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profesor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departmento'), ['controller' => 'Departmento', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departmento'), ['controller' => 'Departmento', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profesor index large-9 medium-8 columns content">
    <h3><?= __('Profesor') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('departamento_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('apellidos') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('imagen_dir') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profesor as $profesor): ?>
            <tr>
                <td><?= $this->Number->format($profesor->id) ?></td>
                <td><?= $profesor->has('departmento') ? $this->Html->link($profesor->departmento->id, ['controller' => 'Departmento', 'action' => 'view', $profesor->departmento->id]) : '' ?></td>
                <td><?= $profesor->has('user') ? $this->Html->link($profesor->user->id, ['controller' => 'Users', 'action' => 'view', $profesor->user->id]) : '' ?></td>
                <td><?= h($profesor->nombre) ?></td>
                <td><?= h($profesor->apellidos) ?></td>
                <td><?= $this->Number->format($profesor->telefono) ?></td>
                <td><?= h($profesor->imagen_dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profesor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profesor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profesor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->id)]) ?>
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
