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
                <?php foreach ($slider as $slider): ?>
                <tr>
                    <td><?= $this->Number->format($slider->id) ?></td>
                    <td>
                           <?= $this->Html->link('',['action' => 'subir'],['class' => 'flechaSuperior']);?>
                        <?= $this->Html->link('',['action' => 'bajar'],['class' => 'flechaInferior']);?>
                    </td>
                    <td><?= $this->Html->image('/files/slider/imagen/' . $slider->imagen_dir . '/miniatura_' . $slider->imagen,
                    ['style' => 'width:50%;border:2px solid #9DC7D4;border-radius:3px;']);?></td>
                    <td><?= h($slider->texto_fecha) ?></td>
                    <td><?= h($slider->texto_tipo) ?></td>
                    <td><?= h($slider->texto_info) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['action' => 'edit', $slider->id],['class' => 'botones botonEditar']) ?>
                        <?= $this->Form->postLink('', ['action' => 'delete', $slider->id], ['class' => 'botones botonBorrar', 'confirm' => __('Are you sure you want to delete # {0}?', $slider->id)]) ?>
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
