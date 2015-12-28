	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<?php if ($slider->count() > 1): ?>
			<ol class="carousel-indicators">
				<?php foreach ($slider as $key => $slide): ?>
					<li data-target="#carousel-example-generic" data-slide-to="<?=$key?>" class="<?=$key==0?'active':''?> miniatura"
					style="background-image:url(files/slider/imagen/<?=$slide->imagen_dir;?>/miniatura_<?=$slide->imagen ?>)">
					</li>
				<?php endforeach ?>
			</ol>

		<?php endif ?>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

			<?php foreach ($slider as $key => $slide): ?>
				<div id="item<?php echo ($key+1) ?>" class="<?php echo $key==0? 'item active': 'item' ?>"
				style="background-image:url(files/slider/imagen/<?php echo $slide->imagen_dir;?>/<?php echo
				$this->view == 'index'? 'slider_':'normal_';echo $slide->imagen ?>)">
					<?php if ($slide->texto_fecha !=null ||$slide->texto_tipo != null || $slide->texto_info != null): ?>
						<div class="carousel-caption">
							<div class="contenedor-etiqueta">
								<div class="fecha">
									<?=$slide->texto_fecha?>
								</div>
								<div class="tipo">
									<?=$slide->texto_tipo?>
								</div>
								<div class="info">
									<?=$slide->texto_info?>
								</div>
								<div class="clave">
									<?=$slide->texto_clave?>
								</div>
							</div>
						</div>
					<?php endif ?>
				</div>
			<?php endforeach ?>
		</div>
		<!-- Controls -->
		<div class="botonera-slider">
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
