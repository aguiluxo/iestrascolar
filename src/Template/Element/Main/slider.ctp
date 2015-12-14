	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

			<?php foreach ($slider as $key => $slide): ?>
				<div id="item<?php echo ($key+1) ?>" class="<?php echo $key==0? 'item active': 'item' ?>"
				style="background-image:url(files/slider/imagen/<?php echo $slide->imagen_dir;?>/<?php echo
				$this->view == 'index'? 'slider_':'slider_';echo $slide->imagen ?>)">
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
