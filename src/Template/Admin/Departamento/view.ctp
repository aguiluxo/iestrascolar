<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departamento'), ['action' => 'edit', $departamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departamento'), ['action' => 'delete', $departamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departamento'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profesor'), ['controller' => 'Profesor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profesor'), ['controller' => 'Profesor', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departamento view large-9 medium-8 columns content">
    <h3><?= h($departamento->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($departamento->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Icono') ?></th>
            <td><?= h($departamento->icono) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($departamento->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($departamento->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($departamento->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Profesor') ?></h4>
        <?php if (!empty($departamento->profesor)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Departamento Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Role') ?></th>
                <th><?= __('Telefono') ?></th>
                <th><?= __('Imagen Dir') ?></th>
                <th><?= __('Imagen') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->profesor as $profesor): ?>
            <tr>
                <td><?= h($profesor->id) ?></td>
                <td><?= h($profesor->departamento_id) ?></td>
                <td><?= h($profesor->nombre) ?></td>
                <td><?= h($profesor->email) ?></td>
                <td><?= h($profesor->password) ?></td>
                <td><?= h($profesor->role) ?></td>
                <td><?= h($profesor->telefono) ?></td>
                <td><?= h($profesor->imagen_dir) ?></td>
                <td><?= h($profesor->imagen) ?></td>
                <td><?= h($profesor->created) ?></td>
                <td><?= h($profesor->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Profesor', 'action' => 'view', $profesor->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Profesor', 'action' => 'edit', $profesor->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profesor', 'action' => 'delete', $profesor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Actividad') ?></h4>
        <?php if (!empty($departamento->actividad)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Descripcion') ?></th>
                <th><?= __('Fecha Ini') ?></th>
                <th><?= __('Fecha Fin') ?></th>
                <th><?= __('Trimestre') ?></th>
                <th><?= __('Financiacion') ?></th>
                <th><?= __('Esta Evaluada') ?></th>
                <th><?= __('Attachment') ?></th>
                <th><?= __('Attachment Dir') ?></th>
                <th><?= __('Direccion') ?></th>
                <th><?= __('Destacada') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Imagen') ?></th>
                <th><?= __('Imagen Dir') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->actividad as $actividad): ?>
            <tr>
                <td><?= h($actividad->id) ?></td>
                <td><?= h($actividad->user_id) ?></td>
                <td><?= h($actividad->titulo) ?></td>
                <td><?= h($actividad->descripcion) ?></td>
                <td><?= h($actividad->fecha_ini) ?></td>
                <td><?= h($actividad->fecha_fin) ?></td>
                <td><?= h($actividad->trimestre) ?></td>
                <td><?= h($actividad->financiacion) ?></td>
                <td><?= h($actividad->esta_evaluada) ?></td>
                <td><?= h($actividad->attachment) ?></td>
                <td><?= h($actividad->attachment_dir) ?></td>
                <td><?= h($actividad->direccion) ?></td>
                <td><?= h($actividad->destacada) ?></td>
                <td><?= h($actividad->created) ?></td>
                <td><?= h($actividad->modified) ?></td>
                <td><?= h($actividad->imagen) ?></td>
                <td><?= h($actividad->imagen_dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Actividad', 'action' => 'view', $actividad->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Actividad', 'action' => 'edit', $actividad->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Actividad', 'action' => 'delete', $actividad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actividad->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
