<html>
	<head>
		<title>SERVICIOS</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url("CSS/servicios.css");?>"/>
	</head>
	<body>
		<div id="contenedor">
			<div id="encabezado">
				<img src="<?=base_url("imagen/dojo.png");?>"/>
			</div>
			<div id="cuerpo_izquierdo">
				<div id="flotante">
					<ul id="menu3">
						<li style="border-left: 5px solid red;" ><?php echo anchor('Dojo','Volver'); ?></li>
					</ul>
				</div>
			</div>	
			<div id="cuerpo_derecho" align="center">
				<table>
				<tr>
					<th>Servicio</th><th>Monto</th>
				</tr>
				<?php foreach($servicios->result() as $servicio){ ?>
					<tr>
						<td><?=$servicio->nombre; ?></td><td>$ <?=$servicio->monto; ?></td>
					</tr>
				<?php } ?>
				</table>
				
			</div>
		</div>


	</body>
</html>