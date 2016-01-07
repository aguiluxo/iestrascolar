<?php $this->assign('title', __('Iestrascolar | Departamentos')); ?>

<div class="jumbotron panelAcciones">
    <?=$this->Html->link('Nuevo departamento',['action' => 'add'],['class' => 'btn btn-success botonAdd']);?>
</div>

<div class="table-responsive">

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('icono') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departamento as $departamento): ?>
            <tr>
                <td><?= $this->Number->format($departamento->id) ?></td>
                <td><?= h($departamento->nombre) ?></td>
                <td><?= h($departamento->icono) ?></td>
                <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $departamento->id],['class' => 'botones botonVer']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $departamento->id],['class' => 'botones botonEditar']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $departamento->id], ['class' => 'botones botonBorrar','confirm' => __('Seguro que quieres borrar el departamento # {0}?', $departamento->id)]) ?>
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

    <p class="col-xs-12"><?= $this->Paginator->counter(__('{{page}} de {{pages}}')) ?></p>
</div>
