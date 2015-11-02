<?php $session = $this->request->session(); ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">IESTRASCOLAR</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?=$menuActivo=='index'?'active':''?>"><?= $this->Html->link(__('Inicio'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
        <li class="<?=$menuActivo=='actividad'?'active':''?>"><?= $this->Html->link(__('Actividades'), ['controller' => 'Actividad', 'action' => 'index']) ?></li>
        <li class="<?=$menuActivo=='destacados'?'active':''?>"><?= $this->Html->link(__('Destacados'), ['controller' => 'Destacado', 'action' => 'index']) ?></li>
        <li class="<?=$menuActivo=='profesores'?'active':''?>"><?= $this->Html->link(__('Profesores'), ['controller' => 'Profesor', 'action' => 'index']) ?></li>
        <li class="<?=$menuActivo=='cursos'?'active':''?>"><?= $this->Html->link(__('Cursos'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?=$this->Html->link('Ir a Web', $this->Url->build('/', true), ['target' => '_blank', 'class' => 'enlaceHome']);?></li>
        <li class="dropdown panelUsuario">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <?=$this->Html->image('/files/profesor/imagen/' . $session->read('Auth.User.imagen_dir') . '/miniatura_' .
          $session->read('Auth.User.imagen'))?>
          <?=$session->read('Auth.User.nombre')?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?=$this->Html->link('Mi perfil', ['controller' => 'Users', 'action' => 'profile']);?></li>
            <li><a href="#">Mis actividades</a></li>
            <li role="separator" class="divider"></li>
            <li><?= $this->Html->link(__('Cerrar sesión'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
