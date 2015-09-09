<?php if ($this->request->action == 'add'): ?>

<?php endif ?>

<?php
if ($this->request->action == 'add') {
 $this->assign('title', __('Añadir Imagen'));

}else{
 $this->assign('title', __('Editar Imagen'));
}

 ?>
<h2>Vista de edición</h2>