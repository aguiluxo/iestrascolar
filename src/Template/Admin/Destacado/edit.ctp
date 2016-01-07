
<div class="well bs-component">
    <div class="row">
        <div class="col-md-12">
            <?= $this->Form->create($destacado, ['class' => 'form-horizontal']) ?>
                <fieldset>
                  <legend><?= $this->request->action == 'add' ?__('Añadir Destacado'):__('Editar Destacado')?></legend>
                    <?=$this->Form->input('actividad_id', ['options' => $actividad, 'class' => 'form-control',
                        'style' => 'max-width:400px']);?>
                    <div class="row contenedorIconos">
                          <?= $this->Munruiz->selectorIconos('Destacado.icono',
                          ['empty' => 'Selecciona icono para actividad destacada',]);?>
                    </div>
              </fieldset>
            </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <button class="btn btn-default">Cancelar</button>
            <?=$this->Form->button(__('Enviar'), ['class' => 'btn btn-primary'])?>
            <?=$this->Form->end();?>
        </div>
    </div>
</div>