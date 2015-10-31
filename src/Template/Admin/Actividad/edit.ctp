<div class="actions columns large-2 medium-3">
    <h3><?=__('Acciones')?></h3>
    <ul class="side-nav">
        <li><?=$this->Form->postLink(
__('Borrar'),
['action' => 'delete', $actividad->id],
['confirm' => __('Estás seguro de que deseas borrar la actividad # {0}?', $actividad->id)]
)
?></li>
        <li><?=$this->Html->link(__('Listado de Actividades'), ['action' => 'index'])?></li>
    </ul>
</div>
<div class="actividad form large-10 medium-9 columns">
    <?=$this->Form->create($actividad)?>
    <fieldset>
        <legend><?=__('Editar Actividad')?></legend>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <?=$this->Form->input('titulo');?>
                </div>
                <div class="col-md-6">
                    <?=$this->Form->input('financiacion');?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?=$this->Munruiz->fecha('fecha_ini', ['label' => 'Fecha de inicio']);?>
                </div>
                <div class="col-md-6">
                    <?=$this->Munruiz->fecha('fecha_fin', ['label' => 'Fecha finalización']);?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                     <?=$this->Form->textarea('descripcion');?>
                    <?php //echo $this->Munruiz->editor('descripcion', ['label' => 'Descripcion', 'id' => 'summernoteCake']); ?>
                </div>
            </div>
            </div>
        </div>
        <?php
        echo $this->Form->input('curso._ids', ['options' => $curso, 'multiple' => 'checkbox', 'label' => 'Cursos']);
        echo $this->Form->input('financiacion');

        echo $this->Form->input('profesor._ids', ['options' => $profesores, 'multiple' => 'checkbox', 'label' => 'Profesores']);
        echo $this->Form->checkbox('destacada', ['id' => 'destacada']);
        echo "Destacada";?>

<!--         <div id="editorSummerNote" class="editorSummerNote">

        </div> -->

    </fieldset>
    <?=$this->Form->button(__('Enviar'))?>
</div>


