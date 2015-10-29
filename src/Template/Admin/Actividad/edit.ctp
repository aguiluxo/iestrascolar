<div class="actions columns large-2 medium-3">
    <h3><?=__('Acciones')?></h3>
    <ul class="side-nav">
        <li><?=$this->Form->postLink(
__('Borrar'),
['action' => 'delete', $actividad->id],
['confirm' => __('Are you sure you want to delete # {0}?', $actividad->id)]
)
?></li>
        <li><?=$this->Html->link(__('Listado de Actividades'), ['action' => 'index'])?></li>
    </ul>
</div>
<div class="actividad form large-10 medium-9 columns">
    <?=$this->Form->create($actividad)?>
    <fieldset>
        <legend><?=__('Editar Actividad')?></legend>
        <?php
        echo $this->Form->input('titulo');
        echo $this->Munruiz->fecha('fecha_ini', ['label' => 'Fecha de inicio']);
        echo $this->Munruiz->fecha('fecha_fin', ['label' => 'Fecha finalización']);
        echo $this->Form->textarea('descripcion');
        echo $this->Form->input('curso._ids', ['options' => $curso]);
        // echo $this->Munruiz->editor('descripcion', ['label' => 'Descripcion', 'id' => 'summernoteCake']);
        echo $this->Form->input('financiacion');
        echo $this->Form->checkbox('destacada', ['id' => 'destacada','data-despliega-contenido-oculto' ]);
        echo "Destacada";?>


        <div class="oculto selectorIconos">
            <?php echo $this->Munruiz->selectorIconos('Destacado.icono',
                ['empty' => 'Selecciona icono para actividad destacada',
            ]); ?>
        </div>
<!--         <div id="editorSummerNote" class="editorSummerNote">

        </div> -->

    </fieldset>
    <?=$this->Form->button(__('Enviar'))?>
</div>


