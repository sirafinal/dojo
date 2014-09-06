<html>
	<head>
		<title>DOJO</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url("CSS/index.css");?>"/>
	</head>
	<body>
		<div id="contenedor">
			<div id="encabezado">
				<img src="<?=base_url("imagen/dojo.png");?>"/>
			</div>
			<div id="cuerpo_izquierdo">
				<div id="flotante">
					<ul id="menu3">
						<li style="border-left: 5px solid red;" ><a href="c++"> Servicios</a></li>
						<li style="border-left: 5px solid #1037ef;"><a href="c++/resueltos"> Ubicacion</a</li>
						<li style="border-left: 5px solid #4fb013;"><a href="c++/clases"> Cursos</a></li>
						<li style="border-left: 5px solid #da25d6;"><a href="c++/programas"> Contactanos</a></li>
					</ul>
				</div>
				<div id="flotante2">
					<?= form_open("Dojo") ?>
						<p>DEJANOS TU MENSAJE</p>
						<hr>
						<?= form_label('Asunto','asunto') ?>
						<input type="text" name="asunto"/>
						<?php if(form_error('asunto'))
						{
							echo "<img src='".base_url("imagen/error.png")."'/>";
						}
						?>
						<br>
						<?= form_label('Mensaje','mensaje') ?>
						<textarea name="mensaje" cols="40" rows="7"></textarea>
						<?php if(form_error('mensaje'))
						{
							echo "<img src='".base_url("imagen/error.png")."'/>";
						}
						?>
						<center><input type="submit" id="boton" name="submit" value="Enviar"/></center>
					</form>
				</div>	
			</div>	
			<div id="cuerpo_derecho">
				<iframe border="0" src="<?php echo site_url('Dojo/mensajes');  ?>" width="400px" height="450px">
					
				</iframe>
			</div>
		</div>


	</body>
</html>