<script>
$(function(){
	$('.sliderProximas').bxSlider({
    slideWidth: 219,
    minSlides: 1,
    maxSlides: 4,
    slideMargin: 27,
    nextSelector: '#siguiente',
    prevSelector: '#anterior',
    nextText: '>',
    prevText: '<'
  });
})
</script>
<div class="outside">
<h3 class="titulo"> <?= __('<b class="cabeceraTitulo">PRÓXIMOS</b> EVENTOS');?></h3>
 	 	<span id="anterior" class="selectorBx"></span>
 	 	<span id="siguiente" class="selectorBx"></span>
</div>
<div class="sliderProximas">
 	<?php foreach ($actividades_proximas as $actividad): ?>
 	 	<div class="slide">
 	 	 	<div class="marco">
 	 	 	 	<?=$this->Html->image('/files/actividad/imagen/' .$actividad->imagen_dir. '/carousel_'. $actividad->imagen, ['onError' => "this.onerror=null;this.src='". Cake\Routing\Router::url('/img/noImagen.jpg') . "';"])?>
 	 	 	 	<div class="titulo"><span><?=$actividad->titulo?></span></div>
 	 	 	</div>
	 	 	<p class="separador">|</p>
	 	 	<div class="descripcion">
 	 	 	 	<p>
 	 	 	 		<?=$this->Text->truncate($actividad->descripcion,73)?>
 	 	 	 	</p>
	 	 	</div>
 	 	</div>
 	<?php endforeach ?>
</div>
