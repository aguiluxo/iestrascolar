<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('alumnos') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($curso as $curso): ?>
            <tr>
                <td><?= $this->Number->format($curso->id) ?></td>
                <td><?= h($curso->nombre) ?></td>
                <td><?= $this->Number->format($curso->alumnos) ?></td>
                <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $curso->id],['class' => 'botones botonVer']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $curso->id],['class' => 'botones botonEditar']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $curso->id], [
                        'class' => 'botones botonBorrar',
                        'confirm' => __('Está seguro de que desea borrar # {0}?', $curso->id)
                     ]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
