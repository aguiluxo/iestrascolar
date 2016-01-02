<?= $this->start('script');?>
 	<?= $this->Html->script('/libs/bxslider/jquery.bxslider.min.js')?>
<?=$this->end();?>
<?=$this->start('css')?>
 	<?=$this->Html->css('/libs/bxslider/jquery.bxslider.css')?>
 <?=$this->end();?>

<?php $this->assign('title', 'IESTRASCOLAR | Inicio') ?>
<div class="row">
<?= $this->element('Main/actividades-destacadas'); ?>
</div>
<div class="row filaSliderProximas">
    <?= $this->element('Main/actividades-proximas'); ?>
</div>