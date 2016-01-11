<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Evaluacion'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actividad'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evaluacion form large-9 medium-8 columns content">
    <?= $this->Form->create($evaluacion) ?>
    <fieldset>
        <legend><?= __('Añadir  Evaluacion') ?></legend>
        <?php
            echo $this->Form->hidden('actividad_id',['class' => 'form-control','value' => $this->request->params['pass'][0]]);
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
