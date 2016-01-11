<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evaluacion'), ['action' => 'edit', $evaluacion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evaluacion'), ['action' => 'delete', $evaluacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluacion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evaluacion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluacion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evaluacion view large-9 medium-8 columns content">
    <h3><?= h($evaluacion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Objetivos') ?></th>
            <td><?= h($evaluacion->objetivos) ?></td>
        </tr>
        <tr>
            <th><?= __('Mejoras') ?></th>
            <td><?= h($evaluacion->mejoras) ?></td>
        </tr>
        <tr>
            <th><?= __('Incidencias') ?></th>
            <td><?= h($evaluacion->incidencias) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Actividad') ?></th>
            <td><?= $this->Number->format($evaluacion->id_actividad) ?></td>
        </tr>
        <tr>
            <th><?= __('Participacion') ?></th>
            <td><?= $this->Number->format($evaluacion->participacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Valoracion') ?></th>
            <td><?= $this->Number->format($evaluacion->valoracion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($evaluacion->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Repetir') ?></th>
            <td><?= $evaluacion->repetir ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
