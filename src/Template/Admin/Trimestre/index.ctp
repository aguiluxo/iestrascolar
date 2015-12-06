    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('trimestre') ?></th>
                <th><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trimestre as $trimestre): ?>
            <tr>
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