<pre>
<?php

// se cargan las variables con el contenido del formulario,
if (isset($_POST['nombre'])) {
    
    $nombre = $_POST['nombre'];
}


if (isset($_POST['precio'])) {

    $precio = $_POST['precio'];
}


if (isset($_POST['stock'])) {

    $stock = $_POST['stock'];
}


if (isset($_POST['categoria'])) {

    $categoria = $_POST['categoria'];
}


if (isset($_POST['marca'])) {

    $marca = $_POST['marca'];
}


if (isset($_POST['envio'])) {

    $envio = $_POST['envio'];
}


$nombreLen = strlen($nombre);

// se realizan las validaciones
if ($nombre == "") {

    $errores .= "Se debe ingresar el nombre. <br>";
} else if ($nombreLen < 2) {

    $errores .= "El nombre debe tener mas de 2 caracteres. <br>";
} else if ($nombreLen > 25) {

    $errores .= "El nombre debe tener un maximo de 25 caracteres. <br>";
}

if ($categoria == "") {

    $errores .= "Se debe seleccionar la categoria. <br>";
}

if ($marca == "") {

    $errores .= "Se debe seleccionar la marca. <br>";
}


if ($stock == "") {

    $errores .= "Se debe ingresar el stock. <br>";
} else if (!is_numeric($stock)) {

    $errores .= "Se debe ingresar un valor numerico para el stock. <br>";
} else {

    // transformar stock a un entero
    $stock = $stock + 0;

    if (!is_int($stock)) {
        $errores .= "Se debe ingresar un valor entero para el stock. <br>";
    } else if ($stock < 0) {

        $errores .= "El stock no puede ser menor a 0. <br>";
    }
}


if ($precio == "") {

    $errores .= "Se debe ingresar el precio. <br>";
} else if (!is_numeric($precio)) {

    $errores .= "Se debe ingresar un valor numerico para el precio. <br>";
} else {

    // transformar precio a un entero
    $precio = $precio + 0;

    if ($precio < 0) {

        $errores .= "El precio no puede ser menor a 0. <br>";
    }
}


if ($envio !== '' && $envio !== "on") {

    $errores .= "Valor de envio invalido. <br>";
}


?>

</pre>