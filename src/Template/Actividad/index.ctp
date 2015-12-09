<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actividad'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Destacado'), ['controller' => 'Destacado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Destacado'), ['controller' => 'Destacado', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profesor'), ['controller' => 'Profesor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profesor'), ['controller' => 'Profesor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actividad index large-9 medium-8 columns content">
    <h3><?= __('Actividad') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('descripcion') ?></th>
                <th><?= $this->Paginator->sort('fecha_ini') ?></th>
                <th><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th><?= $this->Paginator->sort('trimestre') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actividad as $actividad): ?>
            <tr>
                <td><?= $this->Number->format($actividad->id) ?></td>
                <td><?= $this->Number->format($actividad->user_id) ?></td>
                <td><?= h($actividad->titulo) ?></td>
                <td><?= h($actividad->descripcion) ?></td>
                <td><?= h($actividad->fecha_ini) ?></td>
                <td><?= h($actividad->fecha_fin) ?></td>
                <td><?= $this->Number->format($actividad->trimestre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actividad->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actividad->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actividad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actividad->id)]) ?>
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
