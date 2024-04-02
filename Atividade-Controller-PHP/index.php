<?php
    if($_GET)
    {
        $controle = $_GET["controle"];
        $metodo = $_GET["metodo"];
        require_once "controller/". $controle . ".php";
        $objeto = new $controle();
        $objeto->$metodo();
    }
    else
    {
        require_once "controller/inicio.php";
        $inicio = new inicio();
        $inicio->index();
    }
?>