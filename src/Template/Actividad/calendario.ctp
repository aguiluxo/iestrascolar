<div id="calendar">

</div>


<?=$this->Html->script('/libs/bootstrap-calendar/js/vendor/underscore-min.js')?>
<?=$this->Html->script('/libs/bootstrap-calendar/js/calendar.js')?>
<?=$this->Html->script('/libs/bootstrap-calendar/js/language/es-ES.js')?>


<script type="text/javascript">
$(function(){
    var calendar = $("#calendar").calendar(
        {
            language: 'es-ES',
            tmpl_path: "libs/bootstrap-calendar/tmpls/",
            events_source: 'getProgramacion'
        });
})
</script>