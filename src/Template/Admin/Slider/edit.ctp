<div class="row">
    <?= $this->Form->create($slider, ['type' => 'file', 'class' => 'form-horizontal']) ?>
   <div class="col-lg-8 col-lg-offset-2 col-sm-12">
        <div class="well bs-component">
            <fieldset>
              <legend><?= $this->request->action == 'add' ?__('Añadir Slider'):__('Editar Slider')?></legend>
                <div class="form-group">
                    <label for="imgInput" class="col-lg-3 control-label">
                    <?= __('Imagen') ?> <i class="fa fa-picture-o"></i></label>
                    <div class="col-lg-9">
                        <?=$this->Form->input('imagen', ['type' => 'file', 'id' => 'imgInput', 'class' => 'form-control',
                        'label' => false])?>
                    </div>
                </div>

              <div class="form-group">
                <label for="textofechaInput" class="col-lg-3 control-label"><?= __('Texto para fecha') ?></label>
                <div class="col-lg-9">
                    <?=$this->Form->input('texto_fecha', ['label' => false, 'class' => 'form-control',
                    'id' => 'textofechaInput']);?>
                </div>
              </div>
               <div class="form-group">
                <label for="texto1Input" class="col-lg-3 control-label"><?= __('Texto 1') ?></label>
                <div class="col-lg-9">
                    <?=$this->Form->input('texto_tipo', [
                        'label' => false,
                        'id' => 'texto1Input',
                        'placeHolder' => '18 carácteres máximo',
                        'class' => 'form-control'
                    ]);?>
                </div>
              </div>
               <div class="form-group">
                <label for="texto2Input" class="col-lg-3 control-label"><?= __('Texto 2') ?></label>
                <div class="col-lg-9">
                    <?=$this->Form->input('texto_info', [
                        'label' => false,
                        'id' => 'texto2Input',
                        'placeHolder' => '14 carácteres máximo',
                        'class' => 'form-control'
                    ]);?>
                </div>
              </div>
               <div class="form-group">
                <label for="texto3Input" class="col-lg-3 control-label"><?= __('Texto 3') ?></label>
                <div class="col-lg-9">
                    <?=$this->Form->input('texto_clave', [
                        'label' => false,
                        'id' => 'texto3Input',
                        'placeHolder' => '14 carácteres máximo',
                        'class' => 'form-control'
                    ]);?>
                </div>
              </div>
              <div class="row">
                  <div class="col-xs-12">
                    <button type="reset" class="btn btn-default">Cancelar</button>
                      <?=$this->Form->button(__('Enviar'), ['class' => 'btn btn-primary'])?>
                  </div>
              </div>
            </fieldset>
        </div>
    </div>
</div>

