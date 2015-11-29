<?php $this->assign('title', __('Iestrascolar    | Listado de actividades')); ?>

<div class="actividad index large-10 medium-9 columns">
    <?php echo $this->element('menu_busqueda') ?>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('titulo') ?></th>
            <th><?= $this->Paginator->sort('fecha_ini', ['label' => 'Fecha de inicio']) ?></th>
            <th><?= $this->Paginator->sort('fecha_fin', ['label' => 'Fecha fin']) ?></th>
            <th class="actions"><?= __('Acciones') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($actividad as $actividad): ?>
        <tr>
            <td><?= $this->Number->format($actividad->id) ?></td>
            <td><?= h($actividad->titulo) ?></td>
            <td><?= h($actividad->fecha_ini) ?></td>
            <td><?= h($actividad->fecha_fin) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $actividad->id]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $actividad->id]) ?>
                <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $actividad->id], ['confirm' => __('Seguro que quieres borrar la actividad # {0}?', $actividad->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
