<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Trimestre'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trimestre index large-9 medium-8 columns content">
    <h3><?= __('Trimestre') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('trimestre') ?></th>
                <th><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trimestre as $trimestre): ?>
            <tr>
                <td><?= $this->Number->format($trimestre->id) ?></td>
                <td><?= $this->Number->format($trimestre->trimestre) ?></td>
                <td><?= h($trimestre->fecha_inicio) ?></td>
                <td><?= h($trimestre->fecha_fin) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $trimestre->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $trimestre->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
