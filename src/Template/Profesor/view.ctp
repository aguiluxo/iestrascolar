<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profesor'), ['action' => 'edit', $profesor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profesor'), ['action' => 'delete', $profesor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profesor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profesor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departmento'), ['controller' => 'Departmento', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departmento'), ['controller' => 'Departmento', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profesor view large-9 medium-8 columns content">
    <h3><?= h($profesor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Departmento') ?></th>
            <td><?= $profesor->has('departmento') ? $this->Html->link($profesor->departmento->id, ['controller' => 'Departmento', 'action' => 'view', $profesor->departmento->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $profesor->has('user') ? $this->Html->link($profesor->user->id, ['controller' => 'Users', 'action' => 'view', $profesor->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($profesor->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellidos') ?></th>
            <td><?= h($profesor->apellidos) ?></td>
        </tr>
        <tr>
            <th><?= __('Imagen Dir') ?></th>
            <td><?= h($profesor->imagen_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Imagen') ?></th>
            <td><?= h($profesor->imagen) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($profesor->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= $this->Number->format($profesor->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($profesor->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($profesor->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Actividad') ?></h4>
        <?php if (!empty($profesor->actividad)): ?>
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
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($profesor->actividad as $actividad): ?>
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
                <td><?= h($actividad->created) ?></td>
                <td><?= h($actividad->modified) ?></td>
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
