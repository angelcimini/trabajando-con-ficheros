<?php
//ABRIR FICHERO
	$fichero=fopen('ficheros/fichero3.txt', 'w+');

//LEER EL FICHERO CARACTER A CARACTER
// feof entrega false mientras no se llegue al final del fichero y true cuando llega al final
	// while(!feof($fichero)){
	// $caracter=fgetc($fichero);
	// echo $caracter;
	// }
	
//SITUAR EL CURSOR DE LECTURA AL PRINCIPIO DEL FICHERO 'REBOBINAR'
	// rewind($fichero);

	// fwrite($fichero, 'hola');
	// rewind($fichero);
	// $caracter=fgetc($fichero);
	// echo $caracter;

//LEER EL FICHERO HASTA EL NUMERO DE CARACTERES ESPECIFICADO
	// $longitud=filesize('ficheros/fichero3.txt');
	// $contenido=fread($fichero, $longitud);
	// echo $contenido;

//CERRAR EL FICHERO (TAMBIÉN SE 'REBOBINA' CUANDO SE CIERRA EL FICHERO)
	// fclose($fichero);

//LEER EL FICHERO LINEA A LINEA
	// while(!feof($fichero)){
	// $linea=fgets($fichero);
	// echo $linea;
	// }
?>