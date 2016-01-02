<nav class="navbar navbar-default menuContainer">
  <div class="row">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?= ($pagina=='index')?'active':''?>">
          <?= $this->Html->link( __("inicio"),['controller' => 'Front', 'action' => 'index']);?>
          <span class="sr-only">(current)</span>
        </li>
        <li class="<?= ($pagina=='actividades')?'active':''?>">
          <?= $this->Html->link(__("actividades"), ['controller' => 'Actividad', 'view' => 'index']); ?>
        </li>
        <li class="<?= ($pagina=='calendario')?'active':''?>">
          <?= $this->Html->link(__("calendario"), ['controller' => 'Actividad', 'action' => 'calendario']); ?>
        </li>
        <li class="<?= ($pagina=='contacto')?'active':''?>">
          <?= $this->Html->link(__("contacto"), ['controller' => 'Actividad', 'view' => 'index']); ?>
        </li>
        <li>
          <?= $this->Html->link(__("Área privada"), ['controller' => 'Admin', 'view' => 'index']); ?>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="form-group">
          <?= $this->Form->create('filter',['type' =>'get', 'url' =>['controller' => 'Actividad', 'action' => 'index']]);
          echo $this->Form->input('search',['label' => false,'type'=>'search','class' => 'form-control search','placeHolder' => __('Buscar...')]);
          ?>
        <button type="submit" class="btn-social">
         <i class="fa fa-search" style="color:white;font-size:12px;"></i>
        </button>
        </div>
      <?= $this->Form->end(); ?>
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>