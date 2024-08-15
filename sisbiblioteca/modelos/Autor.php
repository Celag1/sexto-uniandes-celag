<?php

class Autor{

    
    public static function index()
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('SELECT * FROM autores');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function crear($nombre, $apellido, $fechanacimiento, $nacionalidad)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('INSERT INTO autores(nombre, apellido, fecha_nacimiento, nacionalidad) VALUES(?, ?, ?, ?)');
        $sql->execute([$nombre, $apellido, $fechanacimiento, $nacionalidad]);
    }


    public static function editar($id, $nombre, $apellido, $fechanacimiento, $nacionalidad)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('UPDATE autores SET nombre=?, apellido=?, fecha_nacimiento=?, nacionalidad=?  WHERE autor_id=?');
        $sql->execute([$nombre, $apellido, $fechanacimiento, $nacionalidad, $id]);
    }

    public static function eliminar($id)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('DELETE FROM autores WHERE autor_id=?');
        $sql->execute([$id]);
    }

    public static function getAutor($id)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('SELECT * FROM autores WHERE autor_id=?');
        $sql->execute([$id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }







}








?>