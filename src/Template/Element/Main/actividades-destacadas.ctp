<?php foreach ($actividades_destacadas as $key => $actividad): ?>
	<div class="col-md-4 actividadDestacada">
		<div class="actividadDestacada-inner">
			<div class="numero">
				<?php echo $key+1 ?>
			</div>
			<div class="titulo">
				
				<?php
				if ($key==1){
					echo "<i class='fa fa-cog'></i>";
				}
				else {
					if ($key==2) {
						echo "<i class='fa fa-laptop'></i>";
					}
					else{
						echo "<i class='fa fa-superscript'></i>";
					}
				}

				?>
				<h3>
					<?php echo $this->Text->truncate(strip_tags($actividad->nombre),25,array(
						'ending' => '',
						'exact' => 'false'
						)) ?>
					</h3>
				</div>
			</div>
			<div class="informacion">
				<?php echo $this->Text->truncate(strip_tags($actividad->objetivos),151, array(
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
