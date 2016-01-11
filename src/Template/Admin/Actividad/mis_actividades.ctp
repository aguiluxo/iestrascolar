<?php $this->assign('title', __('Iestrascolar | Mis actividades')); ?>


    <div class="jumbotron panelAcciones">
    <?=$this->Form->create(null,['action'   =>  'generaInforme','class' =>'form-inline']);?>
        <?=$this->Html->link('Nueva actividad',['action' => 'add'],['class' => 'btn btn-success botonAdd']);?>
    </div>
    <div class="table-responsive">

    <table class="table table-striped table-hover">
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
                <?= $this->Html->link('', ['action' => 'view', $actividad->id], ['class' => 'botones botonVer']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $actividad->id],['class' => 'botones botonEditar']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $actividad->id],[
                    'class' => 'botones botonBorrar',
                    'confirm' => __('Seguro que quieres borrar la actividad # {0}?', $actividad->id)
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

        <p class="col-xs-12"><?= $this->Paginator->counter(__('{{page}} de {{pages}}')) ?></p>
    </div>
