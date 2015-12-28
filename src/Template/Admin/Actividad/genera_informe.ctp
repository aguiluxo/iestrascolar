<style>table{
	background:color:blue;
	width:100%;
}
</style>
<table border="1" class="tablaMadre">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Fecha inicio</th>
			<th>Fecha fin</th>
		</tr>
	</thead>
	<tbody>
			<?php foreach ($actividades as $key => $actividad): ?>
				<tr>
					<td><?=$actividad->titulo?></td>
					<td><?=$actividad->fecha_ini?></td>
					<td><?=$actividad->fecha_fin?></td>
				</tr>
			<?php endforeach ?>
	</tbody>
</table>
