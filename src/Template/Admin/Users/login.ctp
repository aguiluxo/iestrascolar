<!-- <div class="users form">
<?= $this->assign('title','Panel de login') ?>
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Introduce tu nombre de usuario y contraseña') ?></legend>
        <?= $this->Form->input('email',['label' => __('Nombre de usuario')]) ?>
        <?= $this->Form->input('password',['label' => __('Contraseña')]) ?>

    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?> -->
<!-- </div> -->
<?php $this->start('css'); ?>
<?=$this->Html->css('/libs/login/login.css')?>
<?=$this->Html->css('/libs/login/animacioneslogin.css');?>
<?php $this->end(); ?>
<section id="login_preview" style="height: 769px;">
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
									<div id="form_1" data-animation="bounceIn" class="animated bounceIn">
								  		<?=$this->form->create();?>
										<div class="form-header">
										  <i class="fa fa-user"></i>
									  </div>
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
										  	'class' => 'btn btn-block signin'
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


<!-- <script>
			jQuery(function($) {

    var current;
    var navstep;

    current = $('.page-container').find('.current');
    navstep = $('.nav-step').find('.active');

    $('.page-container li').not(current).hide();
    setDynamics(current);

    $('.nav-step-btn').on('click', function (e) {
        if ($(this).parent().attr('id') === "next") {
            e.preventDefault();
            if (current.next().length === 0) return;

            if (current.index() < 2) {
                showHideWizardPage(current.next(), navstep.next());
            }
        } else if ($(this).parent().attr('id') === "prev") {
            e.preventDefault();
            if (current.prev().length === 0) return;

            showHideWizardPage(current.prev(), navstep.prev());
        }
    });

    function showHideWizardPage(p, n) {
        p.addClass('current').addClass('animated').show();
        n.addClass('active');

        current.removeClass('current').removeClass('animated').hide();
        navstep.removeClass('active');

        current = p;
        navstep = n;
        setDynamics(current);
    }

    function setDynamics(current) {
        var index = current.index();
        var max = current.parent().children().length - 1;
        $('#prev').toggleClass("invisible", index < 1);
        $('#next').toggleClass("remove", index >= max);
        $('#submit').toggleClass("remove", index < max);
        $('#stepNo').text(index + 1);
    }

});
</script> -->