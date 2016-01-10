<?=$this->start('script');?>
    <?=$this->Html->script('/libs/bootstrap-calendar/js/vendor/underscore-min.js')?>
    <?=$this->Html->script('/libs/bootstrap-calendar/js/calendar.js')?>
    <?=$this->Html->script('/libs/bootstrap-calendar/js/language/es-ES.js')?>
    <?=$this->Html->script('calendario.js')?>
<?=$this->end();?>
<?=$this->start('css');?>
    <?=$this->Html->css('calendario.css')?>
<?=$this->end();?>
<div class="row">
	<div class="col-md-6">
     <h3 class="mesCalendarioVista"></h3>
    </div>
    <div class="pull-right form-inline col-md-6" style="text-align: center;">
	<div class="btn-group align-center">
	<button class="btn btn-sm btn-primary" data-calendar-nav="prev"><< <?php echo __('Ant.'); ?></button>
	<button class="btn btn-sm btn-default" data-calendar-nav="today"><?php echo __('Hoy'); ?></button>
	<button class="btn btn-sm btn-primary" data-calendar-nav="next"><?php echo __('Sig.'); ?> >></button>
	</div>
	<div class="btn-group align-center">
	<button class="btn btn-sm btn-warning" data-calendar-view="year"><?php echo __('Año'); ?></button>
	<button class="btn btn-sm btn-warning active" data-calendar-view="month"><?php echo __('Mes'); ?></button>
	<button class="btn btn-sm btn-warning" data-calendar-view="week"><?php echo __('Semana'); ?></button>
	<button class="btn btn-sm btn-warning" data-calendar-view="day"><?php echo __('Día'); ?></button>
	</div>
	</div>
</div>
<div class="row">
	<div id="calendar">
</div>

</div>

<?=$this->element('Utils/modal_actividad')?>;

