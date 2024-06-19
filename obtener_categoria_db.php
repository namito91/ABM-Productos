<?php

// Asumiendo que tienes una conexión a la base de datos en $conn

// Obtener el ID de la categoría del producto
$categoria_id = $producto['categoria_id'];

// Consulta para obtener la descripción de la categoría
$query = "SELECT descripcion FROM categorias WHERE categoria_id = ?";

$stmt = $link->prepare($query);

$stmt->bind_param("i", $categoria_id);

$stmt->execute();

$result = $stmt->get_result();

// Obtener la descripción de la categoría
$categoria = $result->fetch_assoc();

$categoria_descripcion = $categoria['descripcion'];

