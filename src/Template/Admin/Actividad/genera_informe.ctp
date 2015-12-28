<table class="items tabla" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">
    <thead>
        <tr>
            <td width="30%">Nombre</td>
            <td width="45%">Fecha inicio</td>
            <td width="25%">Fecha fin</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($actividades as $key => $actividad): ?>
		<tr>
			<td align="center"><?=$actividad->titulo?></td>
			<td align="center"><?=$actividad->fecha_ini?></td>
			<td align="center"><?=$actividad->fecha_fin?></td>
		</tr>
	<?php endforeach ?>

    </tbody>
</table>

<br/><br/>
<table class="items tabla" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">
    <thead>
        <tr>
            <td width="85%"></td>
            <td width="15%">Total Actividades</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="center"></td>
            <td align="center"> X </td>
        </tr>
    </tbody>
</table>

    <br/><br/>
