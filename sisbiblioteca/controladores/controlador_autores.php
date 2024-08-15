<?php

include_once("modelos/Autor.php");
include_once("conexion.php");



class ControladorAutores{

    public function index()
    {
        $autores = Autor::index();

        include_once 'vistas/autores/index.php';
    }


public function crear(){

    if($_POST) {
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $fechanacimiento=$_POST['fecha_nacimiento'];
        $nacionalidad=$_POST['nacionalidad'];
        Autor::crear($nombre, $apellido, $fechanacimiento, $nacionalidad);
        header("location:./?controlador=autores&accion=index");
    }

    include_once("vistas/autores/crear.php");

}



public function editar(){


    if ($_POST) {
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $fechanacimiento=$_POST['fecha_nacimiento'];
        $nacionalidad=$_POST['nacionalidad'];
        Autor::editar($id, $nombre, $apellido, $fechanacimiento, $nacionalidad);
        header("location:./?controlador=autores&accion=index");
        
    }

    $id=$_GET['id'];
    $autor=(Autor::getAutor($id));


    include_once("vistas/autores/editar.php");


}

public function borrar(){
    $id=$_GET['id'];
    Autor::eliminar($id);
    header("location:./?controlador=autores&accion=index");
}


}







?>