<div class="destacado index large-12 medium-12 columns content">
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
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $destacado->id], ['confirm' => __('Estás seguro de que deseas borrar # {0}?', $destacado->id)]) ?>
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
