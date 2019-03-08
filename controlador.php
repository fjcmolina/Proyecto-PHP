<?php

    //Mostrar errores
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);

    header("Cache-Control: no-cache,must-revalidete");

    //Controlador frontal
    $mod=$_GET["mod"]??"usuario";
    $ope=$_GET["ope"]??"index";

    require_once "controlador/controller.$mod.php";

    $nc = "controller$mod";

    $controlador = new $nc();

    if(method_exists($controlador,$ope)){
        $controlador -> $ope();
    }else{
        die("ERROR");
    }
 
?>