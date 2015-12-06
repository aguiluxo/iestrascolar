
<div class="profesor form large-12 medium-8 columns content">
    <?= $this->Form->create($profesor, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Añadir Profesor') ?></legend>
        <?php
            echo $this->Form->input('departamento_id', ['options' => $departamento, 'empty' => true]);
            echo $this->Form->input('nombre');
            echo $this->Form->input('email');
            echo $this->Form->input('telefono');
            echo $this->Form->input('imagen', ['type' => 'file']);
            echo $this->Form->input('curso._ids', ['options' => $curso, 'multiple' => 'checkbox']);

        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
