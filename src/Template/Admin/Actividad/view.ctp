<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actividad'), ['action' => 'edit', $actividad->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actividad'), ['action' => 'delete', $actividad->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actividad->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actividad'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actividad'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Destacado'), ['controller' => 'Destacado', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Destacado'), ['controller' => 'Destacado', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profesor'), ['controller' => 'Profesor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profesor'), ['controller' => 'Profesor', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actividad view large-9 medium-8 columns content">
    <h3><?= h($actividad->titulo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $actividad->has('user') ? $this->Html->link($actividad->user->id, ['controller' => 'Users', 'action' => 'view', $actividad->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($actividad->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($actividad->descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Attachment') ?></th>
            <td><?= h($actividad->attachment) ?></td>
        </tr>
        <tr>
            <th><?= __('Attachment Dir') ?></th>
            <td><?= h($actividad->attachment_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($actividad->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Trimestre') ?></th>
            <td><?= $this->Number->format($actividad->trimestre) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Ini') ?></th>
            <td><?= h($actividad->fecha_ini) ?></tr>
        </tr>
        <tr>
            <th><?= __('Fecha Fin') ?></th>
            <td><?= h($actividad->fecha_fin) ?></tr>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($actividad->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($actividad->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Financiacion') ?></th>
            <td><?= $actividad->financiacion ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Esta Evaluada') ?></th>
            <td><?= $actividad->esta_evaluada ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Destacada') ?></th>
            <td><?= $actividad->destacada ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Cursos que asistirán') ?></h4>
        <?php if (!empty($actividad->curso)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Alumnos') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($actividad->curso as $curso): ?>
            <tr>
                <td><?= h($curso->id) ?></td>
                <td><?= h($curso->nombre) ?></td>
                <td><?= h($curso->alumnos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Curso', 'action' => 'view', $curso->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Curso', 'action' => 'edit', $curso->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Curso', 'action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Profesores que asistirán') ?></h4>
        <?php if (!empty($actividad->profesor)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Departamento Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Telefono') ?></th>
                <th><?= __('Imagen Dir') ?></th>
                <th><?= __('Imagen') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($actividad->profesor as $profesor): ?>
            <tr>
                <td><?= h($profesor->id) ?></td>
                <td><?= h($profesor->departamento_id) ?></td>
                <td><?= h($profesor->user_id) ?></td>
                <td><?= h($profesor->nombre) ?></td>
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
</div>
