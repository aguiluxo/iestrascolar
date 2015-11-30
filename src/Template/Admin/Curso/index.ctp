<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo Curso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Cursos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="curso index large-9 medium-8 columns content">
    <h3><?= __('Curso') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $curso->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $curso->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $curso->id], ['confirm' => __('Está seguro de que desea borrar # {0}?', $curso->id)]) ?>
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
