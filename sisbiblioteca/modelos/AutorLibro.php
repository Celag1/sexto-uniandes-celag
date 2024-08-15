<?php

class AutorLibro{

    
    public static function index()
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('SELECT al.*, a.nombre as autor, l.titulo as libro 
        FROM autores_libros al 
        INNER JOIN autores a ON al.autor_id=a.autor_id 
        INNER JOIN libros l ON al.libro_id=l.libro_id');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function autor()
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('SELECT * FROM autores');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function libro()
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('SELECT * FROM libros');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function crear($autor_id, $libro_id)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('INSERT INTO autores_libros(autor_id, libro_id) VALUES(?, ?)');
        $sql->execute([$autor_id, $libro_id]);
    }


    public static function editar($id, $autor_id, $libro_id)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('UPDATE autores_libros SET autor_id=?, libro_id=? WHERE id=?');
        $sql->execute([$autor_id, $libro_id, $id]);
    }

    public static function eliminar($id)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('DELETE FROM autores_libros WHERE id=?');
        $sql->execute([$id]);
    }

    public static function getAutorLibro($id)
    {
        $conexion = DB::conn();
        $sql = $conexion->prepare('SELECT * FROM autores_libros WHERE id=?');
        $sql->execute([$id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }







}








?>