<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?=$this->Html->charset()?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?=$this->fetch('title')?>
    </title>
    <?=$this->Html->meta('icon')?>
    <?=$this->Html->css('/libs/bootstrap/css/bootstrap.min.css')?>

<!--      JQUERY + BOOTSTRAP + FONTS AWESOME + SUMMERNOTE + DATEPICKER + CAKE ESTILOS -->
    <?=$this->Html->script('/libs/jquery-2.1.4.min.js')?>
    <?=$this->Html->script('/libs/bootstrap/js/bootstrap.min.js')?>
    <?=$this->Html->css('/libs/font-awesome/css/font-awesome.min.css')?>
    <?=$this->Html->script('/libs/summernote/summernote.min.js')?>
    <?=$this->Html->css('/libs/jquery-ui/jquery-ui.min.css')?>
    <?=$this->Html->css('/libs/jquery-ui/jquery-ui.structure.min.css')?>
    <?=$this->Html->css('/libs/jquery-ui/jquery-ui.theme.min.css')?>
    <?=$this->Html->script('/libs/jquery-ui/jquery-ui.min.js')?>
    <?=$this->Html->css('sb-admin-2.css')?>
    <?=$this->Html->css('metisMenu.min.css')?>


    <?=$this->Html->css('base.css')?>

    <!-- Mis estilos -->
    <?=$this->Html->css('default_backend.css')?>

    <!-- Funciones varias -->
    <?=$this->Html->script('cargaFunciones.js')?>



    <?=$this->fetch('meta')?>
    <?=$this->fetch('css')?>
    <?=$this->fetch('script')?>
</head>
<body>



    <div id="container" class="container-fluid">

        <!-- <div id="content" class="row"> -->
            <?=$this->Flash->render()?>
            <?=$this->Flash->render('auth')?>
                         <?php
                    if($this->view =='login'){
                        echo $this->fetch('title');
                    }
                    else{
                        // echo "<div class='col-md-4'>";
                        //     echo $this->element('Admin/menu');
                        // echo "</div>";
                    }
                 ?>
                 <!-- <div class="col-md-8"> -->
                    <?=$this->fetch('content')?>
                 <!-- </div> -->
            <!-- </div> -->
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>
