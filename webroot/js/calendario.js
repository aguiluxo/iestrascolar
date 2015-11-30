$(function(){

	var calendar = $("#calendar").calendar(
	    {
	        language: 'es-ES',
	        tmpl_path: "libs/bootstrap-calendar/tmpls/",
	        tmp_cache: true,
	        events_source: 	"getProgramacion",
	        time_start: '00:00',
	        time_end: '24:00',
	        time_split: '60',
	        onAfterViewLoad: function(view) {
	        	$('h3.mesCalendarioVista').text(this.getTitle());
				var fecha_actual = this.getStartDate();

				$('.btn-group button').removeClass('active');
				$('button[data-calendar-view="' + view + '"]').addClass('active');
	        }
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
})

function modalLaunchActividad(id) {
	var url_base = $('.programaciones-index #calendar').data('url');
	$('#modalViewActividad').modal('show');
	// $('#modalViewActividad').load(url_base + '/formEditEvento/' + id, '', function() {
	// $('#modalViewActividad').modal({
	// 'width': '70%',
	// 'modalOverflow': true
	// });
	// });
	}