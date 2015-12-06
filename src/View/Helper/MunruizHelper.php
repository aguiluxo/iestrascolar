<?php
namespace App\View\Helper;

use Cake\View\Helper;

class MunruizHelper extends Helper
{
	public $helpers = ['Html', 'Form'];

function editor($name, $options = array()){

        $default = array(
            // el label
            'label' => null,
            // Atributos para el div que engloba el control
            'div' => array('class' => 'form-group'),
        );

        $options += $default;

        if(empty($options['id'])){
            $this->Form->setEntity($name);
            $options['id'] = "summernoteCake";
        }

        $atts = array_diff_key($options, $default);

        $uid = uniqid("div");

        ob_start();

        if($options['div'] !== false){
            echo $this->Html->tag('div', null, $options['div']);
        }

        if($options['label']){
            echo $this->Html->tag('label', (string) $options['label']);
        }

        // echo $this->Html->tag('div', (string) $this->Form->value($name), array('id' => $uid));
        echo "<div id='$uid'>";
        echo $this->Form->hidden($name, $atts);

        if(!empty($options['allowCodeEditing'])){
            echo h($this->Html->scriptBlock(sprintf('
                $("#%s").summernote({
                    lang: "es-ES",
                    onblur: function(){
                        $("#%s").val($(this).code());
                    },
                    oninit: function(){
                        $(".note-link-btn").removeClass("disabled");
                        $(".note-link-btn").removeAttr("disabled");
                    },
                    toolbar: [
                        //[groupname, [button list]]

                        ["style", ["style", "fontsize", "bold", "italic", "underline", "clear"]],
                        ["color", ["color"]],
                        ["para", ["ul", "ol", "paragraph"]],
                        ["insert", ["picture", "link", "video", "table", "hr"]],
                        ["code", ["codeview"]],
                      ]
                });
            ', $uid, $options['id'])));
        }else{
            echo $this->Html->scriptBlock(sprintf('
                $("#%s").summernote({
                    lang: "es-ES",
                    onblur: function(){
                        $("#%s").val($(this).code());
                    },
                    oninit: function(){
                        $(".note-link-btn").removeClass("disabled");
                        $(".note-link-btn").removeAttr("disabled");
                    },
                    toolbar: [
                        //[groupname, [button list]]

                        ["style", ["style", "fontsize", "bold", "italic", "underline", "clear"]],
                        ["color", ["color"]],
                        ["para", ["ul", "ol", "paragraph"]],
                        ["insert", ["picture", "link", "video", "table", "hr"]],
                      ]
                });
            ', $uid, $options['id']));
        }

        if($options['div'] !== false){
            echo "</div>";
        }

        return ob_get_clean();
    }

function selectorIconos($name, $options = array()) {
$iconos = [
    'fa fa-bus' => 'Autobus',
    'fa fa-plane' => 'Avión',
    'fa fa-line-chart' => 'Gráfica',
    'fa fa-superscript' => 'Matemáticas',
    'fa fa-book' => 'Lengua',
    'fa fa-language' => 'Inglés',
    'fa fa-laptop' => 'Informática'
];

echo $this->Form->select($name, $iconos,$options);
}




	/**
	 * Imprime un input para fechas con el datepicker de jQueryUI incluido
	 * @param  string el nombre del campo (Como en FormHelper)
	 * @param  array $options
	 * @return string
	 */

function datetimepicker($name, $options = array(), $options_input = array()){

        $default = array(
            // El label por defecto
            'label' => __('Fecha'),
            'placeholder' => false,
            'style' => null,
            'required' => false,
            'class' => 'form-control timepicker',
        );


        $options += $default;

        $datetimepicker_fecha = $name . "datetimepicker";

        $default_input = array(
            'type' => 'text',
            'label' => $options['label'],
            'class' => $options['class'],
            'placeholder' => $options['placeholder'],
            'style' => $options['style'],
            'required' => $options['required'],
            'data-field' => $name,
            'id' => $datetimepicker_fecha
        );


        $options_input += $default_input;


        ob_start();


        echo $this->Form->input($datetimepicker_fecha, $options_input);
        $idInputOculto = $name . "cake";



        echo $this->Form->hidden($name, array('id' => $idInputOculto));


        echo $this->Html->scriptBlock(
            "$('#{$datetimepicker_fecha}').datetimepicker({
                'altField': '#{$idInputOculto}',
                'altFieldTimeOnly': false,
                'altFormat': 'yy-mm-dd',
                'dateFormat': 'dd-mm-yy',
                'timeFormat': 'HH:mm',
            });

            //Si hay una hora en el campo hidden se la paso al timepicker
            var fecha = $('#$idInputOculto}').val();
            if(fecha && fecha != '0000-00-00 00:00:00'){

                var date = new Date(fecha);
                var yr = date.getFullYear();
                var month = ('0' + (date.getMonth() + 1)).slice(-2)
                var day = ('0' + date.getDate()).slice(-2)
                var h = ('0' + date.getHours()).slice(-2)
                var m = ('0' + date.getMinutes()).slice(-2)
                var newTime = h + ':' + m;
                var newDate = day + '-' + month + '-' + yr + ' ' + newTime;
                $('#{$datetimepicker_fecha}').datetimepicker('setTime', newDate);
                $('#{$datetimepicker_fecha}').datetimepicker('setDate', newDate);
            }"
        );

        return ob_get_clean();

    }

	function fecha($name, $options = array(), $options_input = array(), $value = ''){
		$default = array(
            // El label por defecto
			'label' => __('Fecha'),
			'placeholder' => false,
			'style' => null,
			'required' => false,
			'class' => 'form-control datepicker',
			);

		$options += $default;
		$datepicker_fecha = $name . 'datepicker';
		$default_input = array(
			'type' => 'text',
			'label' => $options['label'],
			'id' => $datepicker_fecha,
			'class' => $options['class'],
			'placeholder' => $options['placeholder'],
			'style' => $options['style'],
			'required' => $options['required'],
			);

		$options_input += $default_input;

		ob_start();

		echo $this->Form->input($datepicker_fecha, $options_input);

		$idInputOculto = $name . "cake";
		if($value){
			echo $this->Form->hidden($name, array('value' => $value,'id' => $idInputOculto));
		} else {
			echo $this->Form->hidden($name, array('id' => $idInputOculto));
		}

		echo $this->Html->scriptBlock(
			"$('#{$datepicker_fecha}').datepicker({
				dateFormat: 'dd-mm-yy',
				altField: '#{$idInputOculto}',
				altFormat: 'yy-mm-dd',
				changeMonth: true,
			});

            //Si hay una fecha en el campo hidden se la paso al datepicker
		var fecha = $('#{$idInputOculto}').val();
		if(fecha && fecha != '0000-00-00'){
			var date = new Date(fecha);
			$('#{$datepicker_fecha}').datepicker('setDate', date);
		}"
		);

		return ob_get_clean();

	}
}
