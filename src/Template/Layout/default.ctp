<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


  <?=$this->Html->script('/libs/jquery-2.1.4.min.js')?>

    <!-- bootstrap + font awesome -->
    <?=$this->Html->css('/libs/bootstrap/css/bootstrap.min.css')?>
    <?=$this->Html->script('/libs/bootstrap/js/bootstrap.min.js')?>
    <?=$this->Html->css('/libs/font-awesome/css/font-awesome.min.css')?>

    <!-- Bootstrap Calendar -->
    <?=$this->Html->css('/libs/bootstrap-calendar/css/calendar.css')?>


    <?= $this->Html->css('general.css') ?>

    <!-- Algunos efectos Javascript -->
    <?= $this->Html->script('efectos.js')?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
   <?php echo $this->element('Main/cabecera'); ?>
   <?=$this->element('Main/menu');?>
    <div class="container" id="container">
        <div id="content" class="row">
            <div class="clearfix"></div>
            <?php echo $this->element('Main/slider'); ?>
            <?= $this->fetch('content') ?>
        </div>
    </div>
   <?=$this->element('Main/footer');?>
</body>
</html>
