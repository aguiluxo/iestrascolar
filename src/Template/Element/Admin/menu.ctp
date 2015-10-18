<div class="actions columns large-2 medium-3">
    <h3><?= __('Menú') ?></h3>
    <ul class="side-nav">
        <li>
            <h4>
                <!-- <i class="fa fa-tachometer"></i> -->
                <?= $this->Html->link(__('Tablero'), ['controller' => 'Main', 'action' => 'index']); ?>
            </h4>
        </li>
        <li>
            <div role = "tablist" aria-multiselectable="true" id="accordionMenuAct" class="panel-group actions">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordionMenuAct" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <?= __('Actividades')?> <i class="fa fa-caret-down"></i>
                    </a>
                </h4>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <ul>
                            <li>
                                <?= $this->Html->link(__('Listado'), ['controller' => 'Actividad', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?= $this->Html->link(__('Nueva actividad'), ['controller' => 'Actividad', 'action' => 'add']) ?> 
                            </li>
                             <li>
                                <?= $this->Html->link(__('Evaluar actividad'), ['controller' => 'Evaluacion', 'action' => 'add']) ?> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div role = "tablist" aria-multiselectable="true" id="accordionMenuProf" class="panel-group actions">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordionMenuProf" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <?= __('Profesores')?> <i class="fa fa-caret-down"></i>
                    </a>
                </h4>
                <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <ul>
                            <li>
                                <?= $this->Html->link(__('Listado'), ['controller' => 'Profesor', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?= $this->Html->link(__('Nuevo Profesor'), ['controller' => 'Profesor', 'action' => 'add']) ?> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div role = "tablist" aria-multiselectable="true" id="accordionMenuCur" class="panel-group actions">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordionMenuCur" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <?= __('Cursos')?> <i class="fa fa-caret-down"></i>
                    </a>
                </h4>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <ul>
                            <li>
                                <?= $this->Html->link(__('Listado'), ['controller' => 'Curso', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?= $this->Html->link(__('Nuevo Curso'), ['controller' => 'Curso', 'action' => 'add']) ?> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        <li>
            <div role = "tablist" aria-multiselectable="true" id="accordionMenuFin" class="panel-group actions">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordionMenuFin" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <?= __('Financiadores')?> <i class="fa fa-caret-down"></i>
                    </a>
                </h4>
                <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <ul>
                            <li>
                                <?= $this->Html->link(__('Listado'), ['controller' => 'Financiador', 'action' => 'index']) ?>
                            </li>
                            <li>
                                <?= $this->Html->link(__('Nuevo Financiador'), ['controller' => 'Financiador', 'action' => 'add']) ?> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </ul>
</div>
