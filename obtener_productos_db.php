<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "datos_conexion.php";


try {
    // Habilitar la generación de excepciones para errores de mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Crear la conexión
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_data_base_name);

    $rs = mysqli_query($link, "SELECT * FROM productos");
    // $rs = mysqli_query($link, "SELECT * FROM productos WHERE prd_precio > 1500");

    // se obtiene la cantidad de filas encontradas
    $cantidad_filas = mysqli_num_rows($rs);
} catch (mysqli_sql_exception $e) {

    // Redirigir a la página de error si hay una excepción
    header('Location: pagina_error.php');

    exit(); // Asegura que el script se detenga después de la redirección
}
