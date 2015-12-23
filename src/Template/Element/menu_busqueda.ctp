<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
		  <legend class="panel-title">
		    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				<i class="fa fa-search"></i> 	Buscador de actividades
		    	<i class="pull-right fa fa-chevron-down"></i>
		    </a>
		  </legend>
		</div>
		<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
		  <div class="panel-body">
		  	<div class="row">
		   		<?=$this->Form->create(null, ['class' => 'form-inline']);?>
				<div class="col-md-3">
					<div class="form-group">
						<?=$this->Form->input('q',['placeHolder' =>'Buscar por nombre o descripción', 'label' => false,
						'class' => 'form-control']);?>
					</div>
				</div>
				<div class="col-md-3 contenedorBusquedaTrimestre">
					<div class="form-group">

						<span>Trimestre:</span>
						<?php
							echo $this->Form->radio('trimestre',[
								['value' => 1, 'text' => '1', 'style' => 'color:red;'],
								['value' => 2, 'text' => '2', 'style' => 'color:blue;'],
								['value' => 3, 'text' => '3', 'style' => 'color:green;']
							], ['class' => 'botonesTrimestre'])
						 ?>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<?=$this->Munruiz->fecha('fecha_de',['label' => false,'placeholder' => 'Desde...']);?>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<?=$this->Munruiz->fecha('fecha_a', ['label' => false, 'placeholder' => 'Hasta...']);?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<?php
						echo $this->Html->link('Restablecer', ['action' => 'index'], ['class' => 'btn btn-default']);
						echo $this->Form->button('Buscar', ['type' => 'submit', 'class'	 => 'btn btn-primary']);
						echo $this->Form->end();
						?>
					</div>
				</div>
			</div>
		  </div>
		</div>
		</div>

	</div>