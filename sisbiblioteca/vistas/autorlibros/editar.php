<div class="card">
    <div class="card-header">
      Editar Autor-Libro
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
                
                <input readonly type="hidden" class="form-control" value="<?php echo $autorlibros['id']; ?>" name="id" id="id"
                    aria-describedby="helpId" >

            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Autores</label>
                <select name="autor_id" id="" class="form-control">
                <option selected disabled>seleccionar</option>
                    <?php foreach ($autores as $autor) :?>
                    <option value="<?php echo $autor['autor_id'] ?>" <?php echo $autorlibros['autor_id']==$autor['autor_id'] ? "selected":"";    ?>><?php echo $autor['nombre'] ?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Libros</label>
                <select name="libro_id" id="" class="form-control">
                <option selected disabled>seleccionar</option>
                    <?php foreach ($libros as $libro) :?>
                    <option value="<?php echo $libro['libro_id'] ?>" <?php echo $autorlibros['libro_id']==$libro['libro_id'] ? "selected":"";    ?>><?php echo $libro['titulo'] ?></option>
                    <?php endforeach;?>
                </select>
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Actualizar">
            <a href="?controlador=autorlibros&accion=index" class="btn btn-primary">Cancelar</a>






        </form>
    </div>

</div>