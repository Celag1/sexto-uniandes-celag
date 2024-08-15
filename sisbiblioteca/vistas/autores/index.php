<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=autores&accion=crear" role="button">Nuevo</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha Nacimiento</th>
                    <th>Nacionalidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($autores as $autor) { ?>

                <tr>
                    <td> <?php echo $autor['autor_id']; ?> </td>
                    <td> <?php echo $autor['nombre']; ?> </td>
                    <td> <?php echo $autor['apellido']; ?> </td>
                    <td> <?php echo $autor['fecha_nacimiento']; ?> </td>
                    <td> <?php echo $autor['nacionalidad']; ?> </td>

                    <td>

                        <div class="btn-group" role="group" aria-label="">
                            <a href="?controlador=autores&accion=editar&id=<?php echo $autor['autor_id']; ?>"
                                class="btn btn-info">Editar</a>
                            <a href="?controlador=autores&accion=borrar&id=<?php echo $autor['autor_id']; ?>"
                                class="btn btn-danger">Borrar</a>

                        </div>


                    </td>
                </tr>

                <?php   } ?>


            </tbody>
        </table>

    </div>

</div>