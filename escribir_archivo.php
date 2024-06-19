<?php

$nombre = "";

$comentario = "";

if (isset($_POST['nombre'])) {

    $nombre = $_POST['nombre'];
}


if (isset($_POST['comentario'])) {

    $comentario = $_POST['comentario'];
}


$nombre = trim($nombre);

$comentario = trim($comentario);


if ($nombre !== '' && $comentario !== '') {

    $archivo = "archivo.txt";

    // se muestra el ultimo comentario ingresado,primero 

    // se abre el archivo,para cargar los comentarios que ya tengo
    $fh_actual = fopen($archivo, 'r');

    $largo_archivo_actual = filesize($archivo);

    $contenido_actual = fread($fh_actual, $largo_archivo_actual);

    fclose($fh_actual);


    // cargo nuevo comentario
    date_default_timezone_set("America/Argentina/Buenos Aires");

    $comentario_nuevo = date("d-m-Y H:i:s") . "<br>";

    $comentario_nuevo .= "<br> Nombre :" . $nombre . "<br> escribio : " . $comentario . "<hr>";


    // abro archivo,en modo 'w'
    $fh = fopen($archivo, 'w');

    $resultado = $comentario_nuevo . $contenido_actual;

    fwrite($fh, $resultado);

    fclose($fh);
}
