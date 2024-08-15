<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=autorlibros&accion=crear" role="button">Nuevo</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Autor</th>
                    <th>Libro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($autolibros as $row) { ?>

                <tr>
                    <td> <?php echo $row['id']; ?> </td>
                    <td> <?php echo $row['autor']; ?> </td>
                    <td> <?php echo $row['libro']; ?> </td>
 

                    <td>

                        <div class="btn-group" role="group" aria-label="">
                            <a href="?controlador=autorlibros&accion=editar&id=<?php echo $row['id']; ?>"
                                class="btn btn-info">Editar</a>
                            <a href="?controlador=autorlibros&accion=borrar&id=<?php echo $row['id']; ?>"
                                class="btn btn-danger">Borrar</a>

                        </div>


                    </td>
                </tr>

                <?php   } ?>


            </tbody>
        </table>

    </div>

</div>