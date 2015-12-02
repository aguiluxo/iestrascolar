
<div class="actividad form">
    <?=$this->Form->create($actividad)?>
    <fieldset>
        <legend><?= $this->view =='add' ?__('Añadir Actividad'):__('Editar Actividad')?></legend>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <?=$this->Form->input('titulo');?>
                </div>
                <div class="col-md-6 contenedorTrimestre">
                    <span class="spanTrimestre">Trimestre:</span>
                    <?=$this->Form->radio('trimestre',[
                            ['value' => 1, 'text' => '1', 'style' => 'color:red;'],
                            ['value' => 2, 'text' => '2', 'style' => 'color:blue;'],
                            ['value' => 3, 'text' => '3', 'style' => 'color:green;']
                        ], ['class' => 'botonesTrimestre'])?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?=$this->Munruiz->fecha('fecha_ini', ['label' => 'Fecha de inicio', 'data-fecha' =>'copiar']);?>
                </div>
                <div class="col-md-6">
                    <?=$this->Munruiz->fecha('fecha_fin', ['label' => 'Fecha finalización']);?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                     <?=$this->Form->input('descripcion', ['type' => 'textarea', 'label' => 'Descripción']);?>
                    <?php //echo $this->Munruiz->editor('descripcion', ['label' => 'Descripcion', 'id' => 'summernoteCake']); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <legend>Cursos que asistirán</legend>
                        <?= $this->Form->input('curso._ids', [
                        'options' => $curso,
                        'multiple' => 'checkbox',
                        'label' => false]); ?>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset><legend>Profesores que asistirán</legend>
                        <?= $this->Form->input('profesor._ids', [
                        'options' => $profesores,
                        'multiple' => 'checkbox',
                        'label' => false]); ?>
                    </fieldset>
                </div>
            </div>
        </div>
        <?php
        echo $this->Form->input('financiacion');

        echo $this->Form->checkbox('destacada', ['id' => 'destacada']);
        echo "Destacada";?>

<!--         <div id="editorSummerNote" class="editorSummerNote">

        </div> -->

    </fieldset>
    <?=$this->Form->button(__('Enviar'))?>
</div>

<script>
    $('#fecha_inidatepicker').change(function(){
        if($('#fecha_findatepicker').val() ==""){
            var fecha = $('#fecha_inidatepicker').val();
            $('#fecha_findatepicker').val(fecha);
            console.log(fecha);
            fecha = fecha.split('-');
            var fechaFormateada = fecha[2] + "-" + fecha[1] + "-" + fecha[0];
            $('#fecha_fincake').val(fechaFormateada);
        }
    })
</script>