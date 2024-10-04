<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center"> Editar productos </h1>

    <form action="../crud/editardatos.php" method="post">

    <?php

    

    include_once('../config/conexion.php');
    
    $sql = "SELECT id AS producto_id, codigo, nombre_producto, precio, cantidad, imagen FROM productos WHERE id = " . intval($_REQUEST['id']);

    $resultado = $conexion->query($sql);

    $row = $resultado->fetch_assoc();

    ?>
<div class="container"> 
        <div class="mb-3">
            <label type class="form-label">Codigo</label>
            <input type="text" class="form-control" name="codigo" value="<?= $row['producto_id'] ?>">
        </div>

        <div class="mb-3">
            <label type class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?= $row['nombre_producto'] ?>">
        </div>

        <div class="mb-3">
            <label type class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" value="<?= $row['precio'] ?>">
        </div>

        <div class="mb-3">
            <label type class="form-label">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" value="<?= $row['cantidad'] ?>">
        </div>

        <div class="mb-3">
            <label type class="form-label">Imagen</label>
            <input type="text" class="form-control" name="imagen" value="<?= $row['imagen'] ?>">
        </div>

        <label for="">Categorias</label>
        <select class="form-select mb-3" name="categoria">
            <option selected disabled>Selecionar Categoria</option>
            <?php

            include("../config/conexion.php");

            $sql = $conexion->query("SELECT * FROM categorias");

            while ($resultado = $sql->fetch_assoc()) {
                echo "<option value='" . $resultado['id'] . "'>" . $resultado['nombre'] . "</option>";
            }

            ?>
        </select>


        <div class="text-center">
            <button type="submit" class="btn btn-danger">Enviar</button>
            <a href="../index.php" class="btn btn-dark">Regresar</a>
        </div>

    </form>
    </div>

</body>

</html>