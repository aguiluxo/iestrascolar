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
        echo $this->Form->input('descripcion', ['type' => 'textarea', 'data-descripcion']);
        echo $this->Form->input('fecha_ini');
        echo $this->Form->input('fecha_fin');
        echo $this->Form->input('financiacion');
        ?>
        <div id="editorSummerNote" class="editorSummerNote">

        </div>
    </fieldset>
    <?=$this->Form->button(__('Enviar'), ['data-submit'])?>
    <?=$this->Form->end()?>
</div>
<script>

</script>

