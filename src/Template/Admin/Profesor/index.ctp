   <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('departamento_id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profesor as $profesor): ?>
                <tr>
                    <td><?= $this->Number->format($profesor->id) ?></td>
                    <td><?= $profesor->has('departamento') ? $this->Html->link($profesor->departamento->id, ['controller' => 'Departamento', 'action' => 'view', $profesor->departamento->id]) : '' ?></td>
                    <td><?= h($profesor->nombre) ?></td>
                    <td><?= h($profesor->email) ?></td>
                    <td><?= $this->Number->format($profesor->telefono) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['action' => 'view', $profesor->id],['class' => 'botones botonVer']) ?>
                        <?= $this->Html->link('', ['action' => 'edit', $profesor->id], ['class' => 'botones botonEditar']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $profesor->id], [
                            'class' => 'botones botonBorrar',
                            'confirm' => __('Estas seguro de que deseas borrar # {0}?', $profesor->id)]) ?>
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
