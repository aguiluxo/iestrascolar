
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 class = "tituloModal" id="tituloModal"><?=$actividad->titulo?></h3>
</div>

<div class="modal-body" style="min-height: 400px">
    <?=$this->element('Utils/mapa')?>
    <div class="contenedorFecha">
        <p class="bg-primary">
            <i class="fa fa-clock-o"></i>
            <strong><?=__('Fecha de inicio')?>: </strong>
            <span class="fecha"><?=date('d-m-y,H:i',strtotime($actividad->fecha_ini))?></span>
        </p>
        <p class="bg-info">
            <i class="fa fa-clock-o"></i>
            <strong><?=__('Fecha de finalización')?>: </strong>
            <?=date('d-m-y,H:i',strtotime($actividad->fecha_fin))?></p>
    </div>
    <div class="row">
         <div class="col-md-6">
            <p class="contenidoActividad">
                <?=$actividad->descripcion?>
            </p>
        </div>
            <div class="col-md-6">
                <?=$this->Html->image('/files/actividad/imagen/' .$actividad->imagen_dir. '/carousel_'. $actividad->imagen, ['onError' => "this.onerror=null;this.src='". Cake\Routing\Router::url('/img/noImagen.jpg') . "';"])?>
            </div>
    </div>

</div>
<div class="modal-footer">
    <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
</div>