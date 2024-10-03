<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "almacen";


$conexion =new mysqli($host,$user,$pass,$db);

if(!$conexion){
    echo "conexion fallida";
}


?>