    <div class="table-responsive">
        <table class="table" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('orden') ?></th>
                    <th><i class="fa fa-picture-o"></i></th>
                    <th><?= $this->Paginator->sort('texto_fecha') ?></th>
                    <th><?= $this->Paginator->sort('texto_tipo') ?></th>
                    <th><?= $this->Paginator->sort('texto_info') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($slider as $slide): ?>
                <tr>
                    <td><?= $this->Number->format($slide->id) ?></td>
                    <td>
                           <?= $slide->orden == 1?'':$this->Html->link('',['action' => 'subir', $slide->id],['class' => 'flechaSuperior']);?>

                        <?= $slide->orden == count($slider)?'':$this->Html->link('',['action' => 'bajar', $slide->id],['class' => 'flechaInferior']);?>
                    </td>
                    <td><?= $this->Html->image('/files/slider/imagen/' . $slide->imagen_dir . '/miniatura_' . $slide->imagen,
                    ['class' => 'imagenMiniatura']);?></td>
                    <td><?= h($slide->texto_fecha) ?></td>
                    <td><?= h($slide->texto_tipo) ?></td>
                    <td><?= h($slide->texto_info) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['action' => 'edit', $slide->id],['class' => 'botones botonEditar']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $slide->id], ['class' => 'botones botonBorrar', 'confirm' => __('Are you sure you want to delete # {0}?', $slide->id)]) ?>
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
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
