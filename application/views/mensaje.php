<html>
	<head>
		<title>SIRA DOJO</title>
		<link rel="stylesheet" type="text/css" href="../../CSS/mensaje.css"/>
		<META HTTP-EQUIV="REFRESH" CONTENT="5"/>
	</head>
	<body>
			<?php foreach($mensajes->result() as $mensaje){ ?>
			<div id="mensaje">
				<div id="logo"><img src="../../imagen/Envelope.png" width="50px"/></div>
				<div id="texto">
					<span><?=$mensaje->asunto; ?></span>
					<p>C:\> <?=$mensaje->mensaje; ?></p>
					<p id="horafecha"><?= $mensaje->hora.' - '.$mensaje->fecha ;?></p>
				</div>
			</div>
		<?php } ?>
	</body>
</html>