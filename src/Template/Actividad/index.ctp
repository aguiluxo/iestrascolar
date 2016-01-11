<?php $this->assign('title', 'IESTRASCOLAR | Listado de actividades') ?>

<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover listadoActividades ">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort(__('titulo')) ?></th>
            <th><?= $this->Paginator->sort(__('trimestre')) ?></th>
            <th><?= $this->Paginator->sort(__('dirección')) ?></th>
            <th><?= $this->Paginator->sort(__('fecha_ini'), ['label' => 'Fecha de inicio']) ?></th>
            <th><?= $this->Paginator->sort(__('fecha_fin'), ['label' => 'Fecha fin']) ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($actividad as $actividad): ?>
        <tr>
            <td><?= h($actividad->titulo) ?></td>
            <td><?= h($actividad->trimestre) ?></td>
            <td><?= h($actividad->direccion) ?></td>
            <td><?= h($actividad->fecha_ini) ?></td>
            <td><?= h($actividad->fecha_fin) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>