<?php

if (!isset($titulo)) {

    $titulo = 'Proyecto Integrador';
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center link-body-emphasis text-decoration-none">

                    <span class="fs-4">ABM </span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="index.php">Home</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="productos_alta.php">Alta de Producto</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="productos_baja.php">Baja de Producto</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="productos_listado.php">Listado de Productos</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="contacto.php">Contacto</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="comentar.php">Comentar</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="libro_de_visitas.php">visitas</a>
                    <a class="btn btn-primary" href="index.php">Ingresar</a>
                </nav>
            </div>
        </header>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">

            <h2 class="title"><?= $titulo ?></h2>

        </div>