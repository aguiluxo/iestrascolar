$(function(){
	$('[data-despliega-contenido-oculto]').click(function(){
		$(this).next('.oculto').fadeIn('slow/400/fast', function() {

		});
	})
	if ('[data-despliega-contenido-oculto]:checked') {
		$(this).next('.oculto').fadeIn('slow/400/fast', function() {

		});
	};
})