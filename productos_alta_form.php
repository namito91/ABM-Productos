<form class="row g-3" action="productos_alta.php" method="post">

    <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre</label>
        <input autofocus type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre" value="<?= $nombre ?>">
    </div>

    <div class="col-md-6">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" class="form-control" id="precio" placeholder="precio" value="<?= $precio ?>">
    </div>

    <div class="col-md-6">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" name="stock" class="form-control" id="stock" placeholder="stock" value="<?= $stock ?>">
    </div>


    <?php require "listado_categorias_db.php"; ?>

    <div class="col-md-6">
        <label for="categoria" class="form-label">Categoria</label>
        <select id="categoria" name="categoria" class="form-select">
            <option value="">-</option>
            <option value="1" <?php

                                if ($_POST['categoria'] === '1') {
                                    echo "selected";
                                }
                                ?>> <?php

                                    $categoria = mysqli_fetch_assoc($rs);

                                    echo $categoria['descripcion'];

                                    ?> </option>

            <option value="2" <?php

                                if ($_POST['categoria'] === '2') {
                                    echo "selected";
                                }
                                ?>><?php

                                    $categoria = mysqli_fetch_assoc($rs);

                                    echo $categoria['descripcion'];

                                    ?></option>

            <option value="3" <?php

                                if ($_POST['categoria'] === '3') {
                                    echo "selected";
                                }
                                ?>><?php

                                    $categoria = mysqli_fetch_assoc($rs);

                                    echo $categoria['descripcion'];

                                    ?></option>

            <option value="4" <?php

                                if ($_POST['categoria'] === '4') {
                                    echo "selected";
                                }
                                ?>><?php

                                    $categoria = mysqli_fetch_assoc($rs);

                                    echo $categoria['descripcion'];

                                    ?></option>

            <option value="5" <?php

                                if ($_POST['categoria'] === '5') {
                                    echo "selected";
                                }
                                ?>><?php

                                    $categoria = mysqli_fetch_assoc($rs);

                                    echo $categoria['descripcion'];

                                    ?></option>

        </select>
    </div>


    <?php require "listado_marcas_db.php"; ?>

    <div class="col-md-6">
        <label for="marca" class="form-label">Marca</label>
        <select id="marca" name="marca" class="form-select">
            <option value="">-</option>
            <option value="1" <?php

                                if ($_POST['marca'] === '1') {
                                    echo "selected";
                                }
                                ?>><?php

                                    $marca = mysqli_fetch_assoc($rs);

                                    echo $marca['descripcion'];

                                    ?></option>

            <option value="2" <?php

                                if ($_POST['marca'] === '2') {
                                    echo "selected";
                                }
                                ?>><?php

                                    $marca = mysqli_fetch_assoc($rs);

                                    echo $marca['descripcion'];

                                    ?></option>

            <option value="3" <?php

                                if ($_POST['marca'] === '3') {
                                    echo "selected";
                                }
                                ?>><?php

                                    $marca = mysqli_fetch_assoc($rs);

                                    echo $marca['descripcion'];

                                    ?></option>

            <option value="4" <?php

                                if ($_POST['marca'] === '4') {
                                    echo "selected";
                                }
                                ?>><?php

                                    $marca = mysqli_fetch_assoc($rs);

                                    echo $marca['descripcion'];

                                    ?></option>
            <option value="5" <?php

                                if ($_POST['marca'] === '5') {
                                    echo "selected";
                                }
                                ?>><?php

                                    $marca = mysqli_fetch_assoc($rs);

                                    echo $marca['descripcion'];

                                    ?></option>
        </select>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="3" placeholder="descripcion">

        </textarea>
    </div>

    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="envios" name="envio" <?php

                                                                                        if ($_POST['envio'] === 'on') {
                                                                                            echo "checked";
                                                                                        }
                                                                                        ?>>
            <label class="form-check-label" for="envios">
                Envio sin cargo
            </label>
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

</form>