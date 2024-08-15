<div class="card">
    <div class="card-header">
        Agregar Autor
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
                    placeholder="Nombre">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input required type="text" class="form-control" name="apellido" aria-describedby="helpId"
                    placeholder="Apellido">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Nacimiento</label>
                <input required type="date" class="form-control" name="fecha_nacimiento" aria-describedby="helpId"
                    >
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nacionalidad</label>
                <input required type="text" class="form-control" name="nacionalidad" aria-describedby="emailHelpId"
                    placeholder="Nacionalidad">

            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Agregar">
            <a href="?controlador=autores&accion=index" class="btn btn-primary">Cancelar</a>






        </form>
    </div>

</div>