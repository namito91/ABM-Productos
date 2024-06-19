<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<table class="table table-striped">
    <tr>
        <th>Id </th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Envio</th>
        <th>Stock</th>
        <th>Salida</th>
        <th>Foto </th>
        <th>Categoria</th>
        <th>Marca</th>
    </tr>

    <?php

    require "obtener_productos_db.php";

    while ($producto = mysqli_fetch_assoc($rs)) {

        require "obtener_categoria_db.php";

        require "obtener_marca_db.php";

    ?>
        <tr>
            <td> <?= "<strong>" . $producto['prd_id'] . "</strong><br>" ?> </td>
            <td> <?= "<strong>" . $producto['prd_nombre'] . "</strong><br>" ?> </td>
            <td> <?= "<strong>" . $producto['prd_descripcion'] . "</strong><br>" ?> </td>
            <td> <?= "<strong>" . $producto['prd_precio'] . "</strong><br>" ?> </td>
            <td> <?= "<strong>" . $producto['prd_envio'] . "</strong><br>" ?> </td>
            <td> <?= "<strong>" . $producto['prd_stock'] . "</strong><br>" ?> </td>
            <td> <?= "<strong>" . $producto['prd_salida'] . "</strong><br>" ?> </td>
            <td> <?= "<strong>" . $producto['prd_foto'] . "</strong><br>" ?> </td>
            <td> <?= "<strong>" . $categoria_descripcion . "</strong><br>" ?> </td>
            <td> <?= "<strong>" . $marca_descripcion . "</strong><br>" ?> </td>
        </tr>
    <?php

    }

    // cierro conexion !
    mysqli_close($link);

    ?>

    <tr>
        <td colspan="10" align="center"> Registros encontrados : <?= $cantidad_filas ?> </td>
    </tr>

</table>