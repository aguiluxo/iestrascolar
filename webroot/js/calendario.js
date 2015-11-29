$(function(){
	var calendar = $("#calendar").calendar(
	    {
	        language: 'es-ES',
	        tmpl_path: "libs/bootstrap-calendar/tmpls/",
	        events_source: 'getProgramacion',
	        modal: "#modalViewActividad"
    	});

	$('.btn-group button[data-calendar-nav]').each(function() {
	var $this = $(this);
	$this.click(function() {

	calendar.navigate($this.data('calendar-nav'));
	});
	});

	$('.btn-group button[data-calendar-view]').each(function() {
	var $this = $(this);
	$this.click(function() {
	calendar.view($this.data('calendar-view'));
	});
	});

	$('#first_day').change(function() {
	var value = $(this).val();
	value = value.length ? parseInt(value) : null;
	calendar.setOptions({
	first_day: value
	});
	calendar.view();
	});

	function modalEditEvento(id) {
	var url_base = $('.programaciones-index #calendar').data('url');

	// $('#modalViewActividad').load(url_base + '/formEditEvento/' + id, '', function() {
	// $('#modalViewActividad').modal({
	// 'width': '70%',
	// 'modalOverflow': true
	// });
	// });
	}
})