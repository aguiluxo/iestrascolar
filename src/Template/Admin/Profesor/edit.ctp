<div class="row">
    <?=$this->Form->create($profesor, ['type' => 'file', 'class' => 'form-horizontal'])?>
   <div class="col-lg-6">
        <div class="well bs-component">
            <fieldset>
              <legend><?= $this->request->action == 'add' ?__('Añadir Profesor'):__('Editar Profesor')?></legend>
              <div class="form-group">
                <label for="nombreInput" class="col-lg-2 control-label"><?= __('Nombre') ?></label>
                <div class="col-lg-10">
                    <?=$this->Form->input('nombre', ['label' => false, 'id' => 'nombreInput']);?>
                </div>
              </div>
              <div class="form-group">
                <label for="emailProfesor" class="col-lg-2 control-label">
                    <?= __('E-mail') ?> <i class="fa fa-envelope-o"></i>
                </label>
                <div class="col-lg-10">
                    <?=$this->Form->input('email', ['label' => false, 'id' => 'emailProfesor']);?>
                </div>
              </div>
                <div class="form-group">
                <label for="tlfInput" class="col-lg-2 control-label">
                    <?= __('Telf') ?> <i class="fa fa-phone"></i>
                </label>
                <div class="col-lg-10">
                  <?=$this->Form->input('telefono', ['label' => false, 'id' => 'tlfInput']);?>
                </div>
              </div>
              <div class="form-group">
                <label for="imgInput" class="col-lg-2 control-label">
                 <i class="fa fa-picture-o"></i>
                </label>
                <div class="col-lg-10">
                  <?=$this->Form->input('imagen', ['type' => 'file', 'id' => 'imgInput']);?>
                </div>
              </div>
            </fieldset>
        </div>
    </div>
    <div class="col-lg-6 contenedorCursos">
        <div class="well bs-component">
            <fieldset>
                <legend>Cursos en los que imparte</legend>
                <div class="form-group">
                    <div class="col-xs-12">
                        <?= $this->Form->input('curso._ids', [
                            'options' => $curso,
                            'multiple' => 'checkbox']); ?>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <button>Cancelar</button>
        <?=$this->Form->button(__('Enviar'))?>
    </div>
</div>