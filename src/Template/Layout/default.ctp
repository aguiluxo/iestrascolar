<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>    
    <?= $this->Html->meta('icon') ?>

    
    <?= $this->Html->script('/lib/jquery/jquery-2.1.4.min.js') ?>

    <!-- bootstrap -->
    <?= $this->Html->css('/lib/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->script('/lib/bootstrap/js/bootstrap.min.js') ?>

    <?= $this->Html->css('general.css') ?>

    <?= $this->Html->css('/lib/sb-admin2/bower_components/font-awesome/css/font-awesome.min.css'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div id="container">
        <div class="header">
            <?php echo $this->element('Main/cabecera'); ?>
            <?php echo $this->element('Main/menu'); ?>
        </div>
        <div id="content" class="row">
            <div class="clearfix"></div>
            <?php echo $this->element('Main/slider'); ?>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
        <footer>
        </footer>
    </div>
</div>
</body>
</html>
