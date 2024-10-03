<?php 

include("../config/conexion.php");

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$imagen = $_POST['imagen'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO productos(codigo,nombre_producto,precio,cantidad,imagen,categoria_id) VALUES ('$codigo','$nombre','$precio','$cantidad','$imagen','$categoria')";

$resultado = mysqli_query($conexion,$sql);

if($resultado == TRUE){
    header("location:../index.php");
}else{
    echo "Datos no Insertados";
}


?>
