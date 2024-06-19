<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$titulo = "Listado de productos";

include "header.php";

require "tabla_productos.php";

?>


<?php include "footer.php";
