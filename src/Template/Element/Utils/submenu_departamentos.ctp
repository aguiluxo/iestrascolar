<div class="panel-group form-inline" id="departamentosSelector" role="tablist" aria-multiselectable="true">
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="cabeceraDos">
		  <legend class="panel-title">
		    <a role="button" data-toggle="collapse" data-parent="#departamentosSelector" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				 	Departamentos
		    	<i class="pull-right fa fa-chevron-down"></i>
		    </a>
		  </legend>
		</div>
		<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="cabeceraDos">
		  <div class="panel-body">
		  	<div class="row">
				<div class="col-md-12 contenedorCursos">
					<div class="form-group">
						<?= $this->Form->input('departamentos', [
                        	'label' => false,
                        	'class' => 'form-control',
                            'options' => $departamentos,
                            'empty' => 'Seleccione un departamento'
                            ]); ?>
					</div>
				</div>

			</div>
		  </div>
		</div>
	</div>

</div>