    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('actividad.titulo',['label' => 'Actividad']) ?></th>
                <th><?= $this->Paginator->sort('icono') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($destacado as $destacado): ?>
            <tr>
                <td><?= $this->Number->format($destacado->id) ?></td>
                <td><?= $destacado->has('actividad') ? $this->Html->link($destacado->actividad->titulo, ['controller' => 'Actividad', 'action' => 'view', $destacado->actividad->id]) : '' ?></td>
                <td><i class="<?= h($destacado->icono) ?>"></i></td>
                <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $destacado->id],['class' => 'botones botonVer']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $destacado->id],['class' => 'botones botonEditar']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $destacado->id], [
                        'class' => 'botones botonBorrar',
                        'confirm' => __('Estás seguro de que deseas borrar # {0}?', $destacado->id)]) ?>
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
