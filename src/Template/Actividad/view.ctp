<div class="row">
	<div class="circular">
		<div class="circular-inner">
		<div class="titulo">
			<?= $actividad->nombre;?>
		</div>
		<div class="cuerpo">
			<div class="fecha">
				De <?=$actividad->fecha_inicio ?> a <?= $actividad->fecha_fin ?>
			</div>
			<div class="objetivos">
				<?=$actividad->objetivos;?>
			</div>
		</div>
		</div>
		<div class="profesores">
    <h4 class="subheader"><?= __('Related Profesor') ?></h4>
    <?php if (!empty($actividad->profesor)): ?>
        <?php foreach ($actividad->profesor as $profesor): ?>
       
            <?= h($profesor->nombre) ?>
            <?= h($profesor->departamento_id) ?>


        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
	</div>
</div>





<!-- <div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Evaluacion') ?></h4>
    <?php if (!empty($actividad->evaluacion)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Valoracion') ?></th>
            <th><?= __('Repetir') ?></th>
            <th><?= __('Mejoras') ?></th>
            <th><?= __('Incidencias') ?></th>
            <th><?= __('Actividad Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($actividad->evaluacion as $evaluacion): ?>
        <tr>
            <td><?= h($evaluacion->id) ?></td>
            <td><?= h($evaluacion->valoracion) ?></td>
            <td><?= h($evaluacion->repetir) ?></td>
            <td><?= h($evaluacion->mejoras) ?></td>
            <td><?= h($evaluacion->incidencias) ?></td>
            <td><?= h($evaluacion->actividad_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Evaluacion', 'action' => 'view', $evaluacion->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Evaluacion', 'action' => 'edit', $evaluacion->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Evaluacion', 'action' => 'delete', $evaluacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluacion->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div> -->
<!-- <div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Curso') ?></h4>
    <?php if (!empty($actividad->curso)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Nombre') ?></th>
            <th><?= __('Letra') ?></th>
            <th><?= __('Numero Alumnos') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($actividad->curso as $curso): ?>
        <tr>
            <td><?= h($curso->id) ?></td>
            <td><?= h($curso->nombre) ?></td>
            <td><?= h($curso->letra) ?></td>
            <td><?= h($curso->numero_alumnos) ?></td>
            <td><?= h($curso->created) ?></td>
            <td><?= h($curso->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Curso', 'action' => 'view', $curso->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Curso', 'action' => 'edit', $curso->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Curso', 'action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Financiador') ?></h4>
    <?php if (!empty($actividad->financiador)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Nombre') ?></th>
            <th><?= __('Cantidad') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($actividad->financiador as $financiador): ?>
        <tr>
            <td><?= h($financiador->id) ?></td>
            <td><?= h($financiador->nombre) ?></td>
            <td><?= h($financiador->cantidad) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Financiador', 'action' => 'view', $financiador->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Financiador', 'action' => 'edit', $financiador->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Financiador', 'action' => 'delete', $financiador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financiador->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div> -->
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Profesor') ?></h4>
    <?php if (!empty($actividad->profesor)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Nombre') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Telefono') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Departamento Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($actividad->profesor as $profesor): ?>
        <tr>
            <td><?= h($profesor->id) ?></td>
            <td><?= h($profesor->nombre) ?></td>
            <td><?= h($profesor->email) ?></td>
            <td><?= h($profesor->telefono) ?></td>
            <td><?= h($profesor->created) ?></td>
            <td><?= h($profesor->modified) ?></td>
            <td><?= h($profesor->departamento_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Profesor', 'action' => 'view', $profesor->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Profesor', 'action' => 'edit', $profesor->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profesor', 'action' => 'delete', $profesor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
