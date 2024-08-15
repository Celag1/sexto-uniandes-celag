<?php





require_once("controladores/controlador_".$controlador.".php");

$objectControlador="controlador".ucfirst($controlador);
$controlador= new $objectControlador();
$controlador->$accion();




?>