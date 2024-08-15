<?php

include_once("modelos/AutorLibro.php");
include_once("conexion.php");



class ControladorAutorlibros{

    public function index()
    {
        $autolibros = AutorLibro::index();
    
        include_once 'vistas/autorlibros/index.php';
    }


public function crear(){

    if($_POST) {
        $autor_id=$_POST['autor_id'];
        $libro_id=$_POST['libro_id'];
        AutorLibro::crear($autor_id, $libro_id);
        header("location:./?controlador=autorlibros&accion=index");
    }
    $autores = AutorLibro::autor();
    $libros = AutorLibro::libro();
    include_once("vistas/autorlibros/crear.php");

}



public function editar(){


    if ($_POST) {
        $id=$_POST['id'];
        $autor_id=$_POST['autor_id'];
        $libro_id=$_POST['libro_id'];
        AutorLibro::editar($id, $autor_id, $libro_id);
        header("location:./?controlador=autorlibros&accion=index");
        
    }

    $id=$_GET['id'];
    $autores = AutorLibro::autor();
    $libros = AutorLibro::libro();
    $autorlibros=(AutorLibro::getAutorLibro($id));


    include_once("vistas/autorlibros/editar.php");


}

public function borrar(){
    $id=$_GET['id'];
    AutorLibro::eliminar($id);
    header("location:./?controlador=autorlibros&accion=index");
}


}







?>