<?php

require "datos_conexion.php";

$link = mysqli_connect($db_host, $db_user, $db_password, $db_data_base_name);

// si hay error en la conexion a db,redirijo a "pagina_error.php",
if (!$link) {

    header("Location : pagina_error.php");

    die;
}


mysqli_set_charset($link, $db_charset);

$rs = mysqli_query($link, "SELECT * FROM categorias");
// $rs = mysqli_query($link, "SELECT * FROM productos WHERE prd_precio > 1500");

// cierro conexion,para ahorrar recursos,(ya obtuve los datos en $rs)
mysqli_close($link);

// se obtiene la cantidad de filas encontradas
$cantidad_filas = mysqli_num_rows($rs);

//$categorias = mysqli_fetch_assoc($rs);
