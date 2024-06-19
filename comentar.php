<?php

$titulo = "Comentar";

include "header.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include "escribir_archivo.php";

    if ($nombre !== '' && $comentario !== '') {
?>
        <div class="alert alert-success" role="alert">
            <?= "comentario ingresado con exito!" ?>
        </div>
<?php

    }
}


include "comentario_form.php";


include "footer.php";
