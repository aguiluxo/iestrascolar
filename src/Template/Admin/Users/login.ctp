<?php $this->start('css'); ?>
	<?=$this->Html->css('/libs/login/login.css')?>
	<?=$this->Html->css('/libs/login/animacioneslogin.css');?>
<?php $this->end(); ?>

<section id="signin_main" class="login signin-main" style="height: 769px;">
	<div class="section-content">
	  <div class="wrap">
		  <div class="container">
				<div class="form-wrap">
					<div class="row">
					  <div class="title animated fadeInDown" data-animation="fadeInDown" data-animation-delay=".8s" style="animation-delay: 0.8s;">
						  <h1>IESTRASCOLAR</h1>
						  <h5>Panel de acceso</h5>
					  </div>
						<div id="form_1" data-animation="bounceIn" class="<?php echo isset($efecto)? 'animated bounceIn fail':'animated bounceIn'?>">
					  		<?=$this->Form->create();?>
							<div class="form-header">
							  <i class="fa fa-user <?php echo isset($efecto)? 'fail':'' ?>"></i>

						  </div>
						  <?= $this->Flash->render('auth') ?>
						  <div class="form-main">
							  <div class="form-group">
								<?= $this->Form->input('email',[
								'id' => 'un_1',
								'class' => 'form-control',
								'required' => 'required',
								'label' => false,
								'placeHolder' => __('Nombre de usuario')
								]) ?>
								<?= $this->Form->input('password',[
									'id' => 'pw_1',
									'class' => 'form-control',
									'required' => 'required',
									'label' => false,
									'placeHolder' => __('Contraseña'),
								]) ?>

							  </div>
							  <?= $this->Form->button(__('Entrar'), [
							  	'id' => 'signIn_1',
							  	'class' => 'btn btn-block signin',
							  ]); ?>

							<?= $this->Form->end() ?>
						  </div>
							<div class="form-footer">
								<div class="row">
									<div class="col-xs-12" style="text-align:center">
										<i class="fa fa-unlock-alt"></i>
										<a href="#password_recovery" id="forgot_from_1">¿Olvidó su contraseña?</a>
									</div>
								</div>
							</div>
					  </div>
					</div>
				</div>
		  </div>
	  </div>
	</div>
</section>
