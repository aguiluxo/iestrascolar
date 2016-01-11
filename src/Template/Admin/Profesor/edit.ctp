<div class="row">
    <?=$this->Form->create($profesor, ['type' => 'file', 'class' => 'form-horizontal'])?>
   <div class="col-lg-6">
        <div class="well bs-component">
            <fieldset>
              <legend><?= $this->request->action == 'add' ?__('Añadir Profesor'):__('Editar Profesor')?></legend>
              <div class="form-group">
                <label for="nombreInput" class="col-lg-2 control-label"><?= __('Nombre') ?></label>
                <div class="col-lg-10">
                    <?=$this->Form->input('nombre', ['label' => false, 'id' => 'nombreInput', 'class' => 'form-control']);?>
                </div>
              </div>
              <div class="form-group">
                <label for="emailProfesor" class="col-lg-2 control-label">
                    <?= __('E-mail') ?>
                </label>
                <div class="input-group col-lg-10">
                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                    <?=$this->Form->input('email', ['label' => false, 'id' => 'emailProfesor',  'class' => 'form-control']);?>
                </div>
              </div>
              <div class="form-group">
                <label for="passwordProfesor" class="col-lg-2 control-label">
                    <?= __('Clave') ?>
                </label>
                <div class="input-group col-lg-10">
                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></i></span>
                    <?=$this->Form->input('password', ['label' => false, 'id' => 'passwordProfesor',  'class' => 'form-control']);?>
                </div>
              </div>
              <div class="form-group">
              		<label for="rolProfesor" class="col-lg-2 control-label">
                    <?= __('Rol') ?>
                	</label>
	                <div class="input-group">
	                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
	                    <?= $this->Form->input('role', [
	                        'options' => ['dace' => 'Jefe del DACE', 'profesor' => 'Profesor'],
	                        'class' => 'form-control',
	                        'label' => false,
	                        'id' => 'rolProfesor'
	                    ]) ?>
	                </div>
              </div>
                <div class="form-group">
                <label for="tlfInput" class="col-lg-2 control-label">
                    <?= __('Telf') ?>
                </label>
                <div class="input-group col-lg-10">
                    <span class="input-group-addon"> <i class="fa fa-phone"></i></span>
                    <?=$this->Form->input('telefono', ['class' => 'form-control','label' => false, 'id' => 'tlfInput']);?>
                </div>
              </div>
              <div class="form-group">
                <label for="imgInput" class="col-lg-2 control-label">
                </label>
                <div class="input-group col-lg-10">
                    <span class="input-group-addon"> <i class="fa fa-picture-o"></i></span>
                    <?=$this->Form->input('imagen', [ 'class' => 'form-control', 'type' => 'file', 'id' => 'imgInput']);?>
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
                            'label' => false,
                            'options' => $curso,
                            'multiple' => 'checkbox']); ?>
                    </div>
                </div>
            </fieldset>
            <fieldset>
              <legend>Departamento</legend>
                <div class="form-group">
                    <?=$this->Form->input('departamento_id', [
                        'label' => false,
                        'options' => $departamento,
                        'class' => 'form-control'
                    ]);?>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <?=$this->Form->button(__('Enviar'), ['class' => 'btn btn-primary'])?>
    </div>
</div>