<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = $_POST['producto_id'];

require "datos_conexion.php";

$link = mysqli_connect($db_host, $db_user, $db_password, $db_data_base_name);

mysqli_set_charset($link, $db_charset);

$sql = "DELETE FROM productos WHERE prd_id = ?";

$stmt = $link->prepare($sql);

$stmt->bind_param("i", $id);

$stmt->execute();

$stmt->close();

$link->close();
