<?php

require "datos_conexion.php";

$link = mysqli_connect($db_host, $db_user, $db_password, $db_data_base_name);

mysqli_set_charset($link, $db_charset);

$rs = mysqli_query($link, "SELECT * FROM marca");
// $rs = mysqli_query($link, "SELECT * FROM productos WHERE prd_precio > 1500");

// cierro conexion,para ahorrar recursos,(ya obtuve los datos en $rs)
mysqli_close($link);

// se obtiene la cantidad de filas encontradas
$cantidad_filas = mysqli_num_rows($rs);

//$marcas = mysqli_fetch_assoc($rs);
