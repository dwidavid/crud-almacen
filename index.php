<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <h1 class="text-center"> Listado Almacen </h1>
  </div>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Codigo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Precio</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Imagen</th>
          <th scope="col">Categoria</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php

        require("config/conexion.php");

        $sql = $conexion->query("SELECT productos.id AS producto_id, productos.codigo, productos.nombre_producto, productos.precio, productos.cantidad, productos.imagen, categorias.nombre AS nombre_categoria
    FROM productos
    INNER JOIN categorias ON productos.categoria_id = categorias.id
");

        while ($resultado = $sql->fetch_assoc()) { ?>

          <tr>
            <td scope="row"><?= $resultado['producto_id'] ?></td>
            <td scope="row"><?= $resultado['codigo'] ?></td>
            <td scope="row"><?= $resultado['nombre_producto'] ?></td>
            <td scope="row"><?= $resultado['precio'] ?></td>
            <td scope="row"><?= $resultado['cantidad'] ?></td>
            <td scope="row"><?= $resultado['imagen'] ?></td>
            <td scope="row"><?= $resultado['nombre_categoria'] ?></td>
            <td>
            <a href="./formularios/editarForm.php?id=<?php echo $resultado['producto_id']?>" class="btn btn-warning">Editar</a>

              <a href="" class="btn btn-danger">Eliminar</a>
            </td>


          </tr>

        <?php } ?>


      </tbody>
    </table>

    <div class="container">
      <a href="formularios/agregarForm.php" class="btn btn-success">Agregar Producto</a>
    </div>

  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>