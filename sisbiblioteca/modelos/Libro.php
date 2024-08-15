<?php

class Libro{

    
    public static function index()
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('SELECT * FROM libros');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function crear($titulo, $genero, $fechapublicacion, $isbn)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('INSERT INTO libros(titulo, genero, fecha_publicacion, isbn) VALUES(?, ?, ?, ?)');
        $sql->execute([$titulo, $genero, $fechapublicacion, $isbn]);
    }


    public static function editar($id, $titulo, $genero, $fechapublicacion, $isbn)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('UPDATE libros SET titulo=?, genero=?, fecha_publicacion=?, isbn=?  WHERE libro_id=?');
        $sql->execute([$titulo, $genero, $fechapublicacion, $isbn, $id]);
    }

    public static function eliminar($id)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('DELETE FROM libros WHERE libro_id=?');
        $sql->execute([$id]);
    }

    public static function getLibro($id)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('SELECT * FROM libros WHERE libro_id=?');
        $sql->execute([$id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }







}








?>