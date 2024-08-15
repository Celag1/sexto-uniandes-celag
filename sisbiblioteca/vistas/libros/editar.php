<div class="card">
    <div class="card-header">
      Editar Libro
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
                
                <input readonly type="hidden" class="form-control" value="<?php echo $libro['libro_id']; ?>" name="id" id="id"
                    aria-describedby="helpId" >

            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Título</label>
                <input required type="text" class="form-control" name="titulo" aria-describedby="helpId"
                value="<?php echo $libro['titulo']; ?>">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Género</label>
                <input required type="text" class="form-control" name="genero" aria-describedby="helpId"
                value="<?php echo $libro['genero']; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Publicación</label>
                <input required type="date" class="form-control" name="fecha_publicacion" aria-describedby="helpId"
                value="<?php echo $libro['fecha_publicacion']; ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Isbn</label>
                <input required type="text" class="form-control" name="isbn" aria-describedby="emailHelpId"
                value="<?php echo $libro['isbn']; ?>">

            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Actualizar">
            <a href="?controlador=libros&accion=index" class="btn btn-primary">Cancelar</a>






        </form>
    </div>

</div>