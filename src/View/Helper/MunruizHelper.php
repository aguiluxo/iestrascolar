<?php
namespace App\View\Helper;

use Cake\View\Helper;

class MunruizHelper extends Helper
{
	public $helpers = ['Html', 'Form'];


	/**
	 * Imprime un control de edición de contenido rico
	 * @param  string el nombre del campo (Como en FormHelper)
	 * @param  array $options
	 * @return string
	 */
	function editor($name, $options = array()){

		$default = array(
			// el label
			'label' => null,
			// Atributos para el div que engloba el control
			'div' => array('class' => 'form-group'),
			'id' => 'summernote'
		);

		$options += $default;


		$atts = array_diff_key($options, $default);

		$uid = uniqid("div");

		ob_start();

		if($options['div'] !== false){
			echo $this->Html->tag('div', null, $options['div']);
		}

		if($options['label']){
			echo $this->Html->tag('label', (string) $options['label']);
		}

		echo $this->Html->tag('div', (string) $this->Form->value($name), array('id' => $uid));
		echo $this->Form->hidden($name, $atts);

		echo $this->Html->scriptBlock(sprintf('
			$("#%s").summernote({
				height : 300,
				lang: "es-ES",
				onblur: function(){
					$("#%s").val($(this).code());
				}
			});
		', $uid, $options['id']));

		if($options['div'] !== false){
			echo "</div>";
		}

		return ob_get_clean();
	}


	/**
	 * Imprime un input para fechas con el datepicker de jQueryUI incluido
	 * @param  string el nombre del campo (Como en FormHelper)
	 * @param  array $options
	 * @return string
	 */

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
