<?php

// Asumiendo que tienes una conexión a la base de datos en $conn

// Obtener el ID de la categoría del producto
$marca_id = $producto['marca_id'];

// Consulta para obtener la descripción de la categoría
$query = "SELECT descripcion FROM marca WHERE marca_id = ?";

$stmt = $link->prepare($query);

$stmt->bind_param("i", $marca_id);

$stmt->execute();

$result = $stmt->get_result();

// Obtener la descripción de la categoría
$marca = $result->fetch_assoc();

$marca_descripcion = $marca['descripcion'];
