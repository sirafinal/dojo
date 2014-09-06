<?php
	$conexion=mysql_connect("localhost","root","");
	$base=mysql_select_db("ghecosoft");
	if($_POST)
	{
		$asunto=$_POST['asunto'];
		$mensaje=$_POST['mensaje'];
		$hora = date("h:i:s");
		$fecha = date("Y/m/j");
		
		if($asunto=="" or $mensaje=="")
		{}
		else
		{
			
			$sql="INSERT INTO `mensajes` (`asunto`, `mensaje`, `fecha`, `hora`) VALUES ('$asunto', '$mensaje', '$fecha', '$hora')";
			$consulta=mysql_query($sql);	
		}	
	}

?>
<html>
	<head>
		<title>GhecoSoft</title>
		<link rel="stylesheet" type="text/css" href="index.css"/>
	</head>
	<body>
		<div id="contenedor">
			<div id="encabezado">
				<img src="logo.png"/>
			</div>
			<div id="cuerpo_izquierdo">
				<div id="flotante">
					<ul id="menu3">
						<li style="border-left: 5px solid red;" ><img src="11pers_2020_icons.gif" width="10%"/><a href="c++"> Ejercicios</a></li>
						<li style="border-left: 5px solid #1037ef;"><img src="c_cpp_logo.gif" width="10%"/><a href="c++/resueltos"> Resueltos</a</li>
						<li style="border-left: 5px solid #4fb013;"><img src="Notepad2.png" width="10%"/><a href="c++/clases"> Apuntes C++</a></li>
						<li style="border-left: 5px solid #da25d6;"><img src="Codeblocks_logo1.png" width="10%"/><a href="c++/programas"> Ides</a></li>
					</ul>
				</div>
				<div id="flotante2">
					<form action="#" method="post">
						<p>DEJANOS TU MENSAJE</p>
						<hr>
						<label>Asunto: </label>
						<input type="text" name="asunto"/><br>
						<label>Mensaje: </label>
						<textarea name="mensaje" cols="40" rows="7"></textarea>
						<center><input type="submit" id="boton" name="submit" value="Enviar"/></center>
					</form>
				</div>	
			</div>	
			<div id="cuerpo_derecho">
				<iframe border="0" src=" width="400px" height="450px">
					
				</iframe>
			</div>
		</div>


	</body>
</html>