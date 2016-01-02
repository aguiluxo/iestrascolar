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
                <p class="descripcion">
                    Nos encontramos en la siguiente dirección:
                </p>
                <p class="descripcion">
 	 	 	 	 	<i class="fa fa-map-marker"></i><span> IES Trassierra</span><br>
 	 	 	 	 	<span>Avenida Arrollo del Moro,	s/n</span><br>
 	 	 	 	 	<span>14011 Córdoba</span><br>
 	 	 	 	 	<i class="fa fa-globe"></i>
 	 	 	 	 	<a href="http://iestrassierra.com" target="_blank"> iestrassierra.com</a><br>
 	 	 	 	 	<i class="fa fa-phone"></i><span> 957 73 49 00</span><br>
 	 	 	 	 	<i class="fa fa-envelope-o"></i> <a href="mailto:alvaro89mr@gmail.com?subject=Iestrascolar"> alvaro89mr@gmail.com</a>
                </p>
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
