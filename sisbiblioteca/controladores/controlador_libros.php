<?php

include_once("modelos/Libro.php");
include_once("conexion.php");



class ControladorLibros{

    public function index()
    {
        $libros = Libro::index();

        include_once 'vistas/libros/index.php';
    }


public function crear(){

    if($_POST) {
        $titulo=$_POST['titulo'];
        $genero=$_POST['genero'];
        $fechapublicacion=$_POST['fecha_publicacion'];
        $isbn=$_POST['isbn'];
        Libro::crear($titulo,$genero,$fechapublicacion,$isbn);
        header("location:./?controlador=libros&accion=index");
    }

    include_once("vistas/libros/crear.php");

}



public function editar(){


    if ($_POST) {
        $id=$_POST['id'];
        $titulo=$_POST['titulo'];
        $genero=$_POST['genero'];
        $fechapublicacion=$_POST['fecha_publicacion'];
        $isbn=$_POST['isbn'];
        Libro::editar($id, $titulo,$genero,$fechapublicacion,$isbn);
        header("location:./?controlador=libros&accion=index");
        
    }

    $id=$_GET['id'];
    $libro=(Libro::getLibro($id));


    include_once("vistas/libros/editar.php");


}

public function borrar(){
    $id=$_GET['id'];
    Libro::eliminar($id);
    header("location:./?controlador=libros&accion=index");
}


}







?>