<table border="1" class="table table-striped table-hover">
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