<?php
 class DB
 {
     private static $instancia = null;
 
     public static function conn()
     {
         if (!isset(self::$instancia)) {
             $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 
             self::$instancia = new PDO('mysql:host=localhost;dbname=dbbiblioteca', 'root', '', $opcionesPDO);
             
         }
         return self::$instancia;
     }
 }
 
 ?>