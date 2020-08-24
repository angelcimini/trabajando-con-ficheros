<?php
	//si el fichero no existe lo creamos vacío
	if(!file_exists('ficheros/comentarios.txt')){
		touch('ficheros/comentarios.txt');
	}
	//comprobar si se ha pulsado enviar
	if(isset($_POST['enviar'])){
		//recuperar nombre y comentarios
		$nombre=$_POST['nombre'];
		$comentarios=$_POST['comentarios'];

		//confeccionar mensaje
		$mensaje="$nombre escribió el ".date('j-m-y').":<br>$comentarios<br><br>";

		//leer fichero con el contenido previo
		$contenido= file_get_contents('ficheros/comentarios.txt');
		
		//escribir fichero: comentario y contenido previo a continuación
		file_put_contents('ficheros/comentarios.txt', $mensaje.$contenido);
	}
?>
<html>
<head>
	<title>blog</title>
	<meta charset='UTF-8'>
</head>
<body>
	<center><h3>Escritura en ficheros</h3></center>
	<div style="width:700px; background: white; margin:auto; border:1px solid black; padding:20px; border-radius:10px;">
		<form method="post" action="#">
			<input type="text" name="nombre" placeholder="nombre" required /><br><br>
			<textarea style="width:300px; height:100px" name="comentarios"></textarea><br><br>
			<input type="submit" name="enviar" value="Enviar" />
		</form>
		<h3>Comentarios: </h3>
		<?php readfile('ficheros/comentarios.txt'); ?>
	</div>	
</body>
</html>