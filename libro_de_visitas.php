<?php

$titulo = "Libro de visitas";

include "header.php";

// SEGUIR CLASE 09  EN 1:07:00 HS 

$archivo = 'archivo.txt';

/*
// se abre el archivo 'file.txt', para lectura 'r'
$fh = fopen($archivo, 'r');

// obtengo el largo del archivo
$largo_del_archivo = filesize($archivo);

// se lee el archivo por completo
echo fread($fh, $largo_del_archivo);
*/

// otra forma mas directa, con la funcion fpassthru() 
// fpassthru() (lee el contenido completo de un archivo y los muesta en pantalla directamente)
$fh = fopen($archivo, 'r');

fpassthru($fh);

fclose($fh);


include "footer.php";
