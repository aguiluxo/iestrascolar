<div class="users form">
<?= $this->assign('title','Panel de login') ?>
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Introduce tu nombre de usuario y contraseña') ?></legend>
        <?= $this->Form->input('email',['label' => __('Nombre de usuario')]) ?>
        <?= $this->Form->input('password',['label' => __('Contraseña')]) ?>

    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>