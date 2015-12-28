<div class="panel-group form-inline" id="cursosSelector" role="tablist" aria-multiselectable="true">
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="cabeceraUno">
		  <legend class="panel-title">
		    <a role="button" data-toggle="collapse" data-parent="#cursosSelector" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				 	Cursos
		    	<i class="pull-right fa fa-chevron-down"></i>
		    </a>
		  </legend>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="cabeceraUno">
		  <div class="panel-body">
		  	<div class="row">
				<div class="col-md-12 contenedorCursos">
					<div class="form-group">
						<?= $this->Form->input('cursos', [
                        	'label' => false,
                            'options' => $cursos,
                            'multiple' => 'checkbox']); ?>
					</div>
				</div>

			</div>
		  </div>
		</div>
	</div>

</div>