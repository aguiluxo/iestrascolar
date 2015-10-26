<?php foreach ($actividades_destacadas as $key => $actividad): ?>
	<div class="col-md-4 actividadDestacada">
		<div class="actividadDestacada-inner">
			<div class="numero">
				<?php echo $key+1 ?>
			</div>
			<div class="titulo">

				<?php
					echo "<i class='$actividad->icono'></i>";

				?>
				<h3>
					<?php echo $this->Text->truncate(strip_tags($actividad->actividad->titulo),25,array(
						'ending' => '',
						'exact' => 'false'
						)) ?>
					</h3>
				</div>
			</div>
			<div class="informacion">
				<?php echo $this->Text->truncate(strip_tags($actividad->actividad->descripcion),151, array(
					'ending' => '',
					'exact' => false,
					)); ?>
				</div>
				<a href="<?= $this->Url->build(['controller' => 'Actividad', 'action' => 'view', $actividad->id]);?>">
					<div class="leer-mas">
						<i class="fa fa-plus"></i>
					</div>
				</a>
			</div>
		<?php endforeach ?>
