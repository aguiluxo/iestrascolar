 <footer class="footer">
     <?=$this->Html->image('pico_footer.png',['class' => 'picoFooter'])?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <div class="titulo quees">
                QUÉ ES IESTRASCOLAR
            </div>
            <p class="descripcion">IESTRASCOLAR es una aplicación desarrollada con el fin de optimizar y controlar las actividades extraescolares en las que participan los diversos cursos que forman este centro.

            </div>
            <div class="col-md-3">
            </div>
             <div class="col-md-3">
            </div>
             <div class="col-md-3">
                <div class="titulo">
                INFO DE <b>CONTACTO</b>
                </div>
             </div>
            </div>
    </div>
    </footer>
        <footer class="subfooter">
            <div class="container">
            <div class="row">
            <div class="col-sm-6 nopadding copyright">
 	 	 	<span>Copyright &copy2015 <b>Álvaro Muñoz</b></span>
            </div>
            <div class="col-sm-6 pull-right menuFooter">
                <?=$this->Html->link('Inicio', ['controller' => 'Front', 'action' => 'index'])?>
                <span> | </span>
                <?=$this->Html->link('Calendario', ['controller' => 'Actividad', 'action' => 'calendario'])?>
                <span> | </span>
                <?=$this->Html->link('Politica Cookies', '#')?>
            </div>
            </div>
        </footer>

    </footer>