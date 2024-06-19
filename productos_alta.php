<?php

/* 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

$titulo = "Alta de producto";

include "header.php";

// se inicializan las variables,para que todas existan,
$nombre = "";
$precio = "";
$stock = "";
$categoria = "";
$marca = "";
$descripcion = "";
$envio = "";
$errores = "";
$mensaje_para_usuario = "";
$tipo_de_alert = "";


// si accedo atraves de POST , se incluyen las validaciones
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include "validar.php";

    // se valida si hay errores ,
    if ($errores !== "") {

        $mensaje_para_usuario = $errores;

        $tipo_de_alert = "alert-danger";
    } else {

        require "ingresar_producto_db.php";

        // se ingresa el producto en la DB !!! (IMPLEMENTARR)
        $mensaje_para_usuario = "Producto ingresado con exito!";

        $tipo_de_alert = "alert-success";

        // se vacian las variables, para que el formulario no continue precargado
        $nombre = "";
        $precio = "";
        $stock = "";
        $categoria = "";
        $marca = "";
        $descripcion = "";
        $envio = "";
        $errores = "";
    }

    if ($mensaje_para_usuario) {
?>
        <div class="alert <?= $tipo_de_alert ?>" role="alert">
            <?= $mensaje_para_usuario ?>
        </div>

<?php
    }
}

include "productos_alta_form.php";

?>

<?php include "footer.php";
