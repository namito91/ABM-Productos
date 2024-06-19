<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "datos_conexion.php";

$link = mysqli_connect($db_host, $db_user, $db_password, $db_data_base_name);

mysqli_set_charset($link, $db_charset);

//$rs = mysqli_query($link, "INSERT INTO productos VALUES (?,?,?,?,?,?,?,?) "); 

$stmt = $link->prepare("INSERT INTO productos (prd_nombre,prd_precio,prd_stock,categoria_id,marca_id,prd_descripcion,prd_envio) VALUES (?,?,?,?,?,?,?)");

$stmt->bind_param("siiiiss", $nombre, $precio, $stock, $categoria, $marca, $descripcion, $envio);

$stmt->execute();





/* 
function selectCategoria($categoria)
{

    $cat_id = 0;

    switch ($categoria) {

        case ($categoria === "Electrónica"):
            $cat_id = 1;
            break;

        case ($categoria === "Ropa"):
            $cat_id = 2;
            break;

        case ($categoria === "Hogar"):
            $cat_id = 3;
            break;

        case ($categoria === "Juguetes"):
            $cat_id = 4;
            break;

        case ($categoria === "Deportes"):
            $cat_id = 5;
            break;
    }

    return $cat_id;
}


function selectMarca($marca)
{

    $marc_id = 0;

    switch ($marca) {

        case ($marca === "MarcaA"):
            $marc_id = 1;
            break;

        case ($marca === "MarcaB"):
            $marc_id = 2;
            break;

        case ($marca === "MarcaC"):
            $marc_id = 3;
            break;

        case ($marca === "MarcaD"):
            $marc_id = 4;
            break;

        case ($marca === "MarcaE"):
            $marc_id = 5;
            break;
    }

    return $marc_id;
}
*/