<?php
	$texto='';
	//leer fichero txt
	// $contenido=file_get_contents('ficheros/hola_mundo.txt');
	// echo $contenido;

	// //leer y mostrar fichero txt
	// $caracteres=readfile('ficheros/hola_mundo.txt');
	// //numero de caracteres que tiene el fichero
	// echo $caracteres;

	// //leer fichero linea a linea
	// $arrayLineas=file('ficheros/hola_mundo.txt');
	// print_r($arrayLineas);

	// //escribir en un fichero
	// file_put_contents('ficheros/adios_mundo.txt','adiós mundo');
	// readfile('ficheros/adios_mundo.txt');

	if(isset($_POST['enviar'])){
		//recuperar el contenido del textarea
		$contenido=$_POST['contenido'];
		//grabar fichero
		file_put_contents('ficheros/textarea.txt', $contenido);
	}
	//leer fichero si existe para mostrar el contenido en el textarea
	if(file_exists('ficheros/textarea.txt')){
		$texto=file_get_contents('ficheros/textarea.txt');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action='#' method='post'>
		<textarea name='contenido' cols='30' rows='5'><?=$texto?></textarea><br>
		<input type="submit" name="enviar">
	</form>
</body>
</html>