<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Producto</h1>

<div class="container">

    <form action="../crud/insertardatos.php" method="post">

  <div class="mb-3">
    <label type class="form-label">Codigo</label>
    <input type="text" class="form-control" name="codigo">
  </div>

    <div class="mb-3">
    <label type class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre">
    </div>

    <div class="mb-3">
    <label type class="form-label">Precio</label>
    <input type="text" class="form-control" name="precio">
    </div>

    <div class="mb-3">
    <label type class="form-label">Cantidad</label>
    <input type="text" class="form-control" name="cantidad">
    </div>

    <div class="mb-3">
    <label type class="form-label">Imagen</label>
    <input type="text" class="form-control" name="imagen">
    </div>

    <label for="">Categorias</label>
    <select class="form-select mb-3" name="categoria">
        <option selected disabled>Selecionar Categoria</option>
        <?php 
        
        include("../config/conexion.php");

        $sql = $conexion->query("SELECT * FROM categorias");

        while ($resultado = $sql->fetch_assoc()) {
            echo "<option value='".$resultado['id']."'>".$resultado['nombre']."</option>";
        }
        
        ?>
    </select>


<div class="text-center">
  <button type="submit" class="btn btn-danger">Enviar</button>
  <a href="../index.php" class="btn btn-dark">Regresar</a>
  </div>

</form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>