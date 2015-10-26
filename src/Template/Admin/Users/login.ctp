<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Introduce tu nombre de usuario y contraseña') ?></legend>
        <?= $this->Form->input('username',['label' => __('Nombre de usuario')]) ?>
        <?= $this->Form->input('password'),['label' => __('Contraseña')] ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>