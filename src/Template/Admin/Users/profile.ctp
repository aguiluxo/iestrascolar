<?php $session = $this->request->session(); ?>
<?=$this->Html->css('profile.css');?>
<?= $this->assign('title','Perfil de ' . $session->read('Auth.User.nombre'));?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 imageProfileContainer">
		<?=  $this->Html->image('/files/profesor/imagen/' . $session->read('Auth.User.imagen_dir') . '/estirada_' .
			 $session->read('Auth.User.imagen')) ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-9">
		</div>
	</div>
</div>