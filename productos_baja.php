<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require "eliminar_producto_db.php";
}




$titulo = "Baja de Producto";

include "header.php";

require "obtener_productos_db.php";

// require "eliminar_producto_db.php";

?>

<form class="row g-3" action="productos_baja.php" method="post">

    <div class="col-md-6">
        <label for="producto" class="form-label">Selecciona el Producto a eliminar </label>
        <select id="producto" name="producto_id" class="form-select">

            <?php

            // iterar sobre productos obtenidos de db
            while ($producto = mysqli_fetch_assoc($rs)) {

                echo "<option value='{$producto['prd_id']}'>{$producto['prd_nombre']}</option>";
            }

            ?>

            </option>

        </select>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Eliminar</button>
    </div>

</form>

<?php include "footer.php";
