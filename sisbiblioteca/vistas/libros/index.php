<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=libros&accion=crear" role="button">Nuevo</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Género</th>
                    <th>Fecha Publicación</th>
                    <th>isbn</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($libros as $libro) { ?>

                <tr>
                    <td> <?php echo $libro['libro_id']; ?> </td>
                    <td> <?php echo $libro['titulo']; ?> </td>
                    <td> <?php echo $libro['genero']; ?> </td>
                    <td> <?php echo $libro['fecha_publicacion']; ?> </td>
                    <td> <?php echo $libro['isbn']; ?> </td>

                    <td>

                        <div class="btn-group" role="group" aria-label="">
                            <a href="?controlador=libros&accion=editar&id=<?php echo $libro['libro_id']; ?>"
                                class="btn btn-info">Editar</a>
                            <a href="?controlador=libros&accion=borrar&id=<?php echo $libro['libro_id']; ?>"
                                class="btn btn-danger">Borrar</a>

                        </div>


                    </td>
                </tr>

                <?php   } ?>


            </tbody>
        </table>

    </div>

</div>