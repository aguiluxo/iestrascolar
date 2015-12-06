<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profesor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamento'), ['controller' => 'Departamento', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamento', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profesor index large-9 medium-8 columns content">
    <h3><?= __('Profesor') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('departamento_id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('role') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profesor as $profesor): ?>
            <tr>
                <td><?= $this->Number->format($profesor->id) ?></td>
                <td><?= $profesor->has('departamento') ? $this->Html->link($profesor->departamento->nombre, ['controller' => 'Departamento', 'action' => 'view', $profesor->departamento->id]) : '' ?></td>
                <td><?= h($profesor->nombre) ?></td>
                <td><?= h($profesor->email) ?></td>
                <td><?= h($profesor->password) ?></td>
                <td><?= h($profesor->role) ?></td>
                <td><?= $this->Number->format($profesor->telefono) ?></td>
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
