
<div class="evaluacion form large-9 medium-8 columns content">
    <?= $this->Form->create($evaluacion) ?>
    <fieldset>
        <legend><?= __('Editar Evaluacion') ?></legend>
        <?php
            echo $this->Form->input('id_actividad',['class' => 'form-control']);
            echo $this->Form->input('participacion',['class' => 'form-control']);
            echo $this->Form->input('objetivos',['class' => 'form-control']);
            echo $this->Form->input('valoracion',['class' => 'form-control']);
            echo $this->Form->input('repetir',['class' => 'form-control']);
            echo $this->Form->input('mejoras',['class' => 'form-control']);
            echo $this->Form->input('incidencias',['class' => 'form-control']);
        ?>
    </fieldset>
<div class="row">
    <div class="col-xs-12">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <?=$this->Form->button(__('Enviar'), ['class' => 'btn btn-primary'])?>
    </div>
</div>
    <?= $this->Form->end() ?>
</div>
