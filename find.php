<?php
header('Access-Control-Allow-Origin: *');
require "Connection.php";

switch ($_GET["cual"])
{
    case "categoria":
        require "models/Categoria.php";
        $equipo = new Categoria(Connection::Connect());
        break;

    case "modelo":
        require "models/Modelo.php";
        $equipo = new Modelo(Connection::Connect());
        break;

    case "estado":
        require "models/Estado.php";
        $equipo = new Estado(Connection::Connect());
        break;
}


echo $equipo->find($_GET["id"]);
