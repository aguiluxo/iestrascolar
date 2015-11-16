<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista Cursos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Actividades'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="curso form large-9 medium-8 columns content">
    <?= $this->Form->create($curso) ?>
    <fieldset>
        <legend><?= __('Add Curso') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('alumnos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
