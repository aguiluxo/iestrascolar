<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Añadir Usuario') ?></legend>
        <?php
            echo $this->Form->input('username', ['label' => __('Usuario')]);
            echo $this->Form->input('password', ['label' => __('Contraseña')]);
            echo $this->Form->input('role', [
            'label' => __('Rol'),
            'empty' => 'Seleccione el tipo de usuario',
            'options' => ['superadmin' => 'Super Administrador', 'admin' => 'Administrador', 'profesor' => 'Profesor']
        ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
