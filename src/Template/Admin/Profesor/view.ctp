<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profesor'), ['action' => 'edit', $profesor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profesor'), ['action' => 'delete', $profesor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profesor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profesor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamento'), ['controller' => 'Departamento', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamento', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profesor view large-9 medium-8 columns content">
    <h3><?= h($profesor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Departamento') ?></th>
            <td><?= $profesor->has('departamento') ? $this->Html->link($profesor->departamento->id, ['controller' => 'Departamento', 'action' => 'view', $profesor->departamento->id]) : '' ?></td>
        </tr>

        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($profesor->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($profesor->email) ?></td>
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
            <th><?= __('Creado') ?></th>
            <td><?= h($profesor->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($profesor->modified) ?></tr>
        </tr>
    </table>

</div>
