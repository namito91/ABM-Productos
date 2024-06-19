<form class="row g-3" action="comentar.php" method="post">

    <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre</label>
        <input autofocus type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre">
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="email">
    </div>


    <div class="form-group">
        <label for="comentario">Comentario</label>
        <textarea class="form-control" name="comentario" id="comentario" cols="30" rows="3" placeholder="comentario">

        </textarea>
    </div>


    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>