<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

  </head>
  <body data-bs-theme="dark">

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Sistema <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="?controlador=paginas&accion=inicio">Home</a>
            <a class="nav-item nav-link" href="?controlador=autores&accion=index">Autores</a>
            <a class="nav-item nav-link" href="?controlador=libros&accion=index">Libros</a>
            <a class="nav-item nav-link" href="?controlador=autorlibros&accion=index">Autores-Libros</a>
        </div>
    </nav>





    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php include_once("ruteador.php");   ?>

            </div>
            
        </div>
    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>