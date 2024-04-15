<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
<body>
    <h1 class="text-center p-3">Prueba de Mi Primer Proyecto</h1>
    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
          <h3 class="text-center text-secundary">Registro</h3>
          <?php
          include 'modelo/conexion.php';
          include 'controlador/registro_persona.php';
          ?>
          <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">DNI</label>
            <input type="text" class="form-control" name="dni">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nac">
        </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo">
      </div>
      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>
          <div class="col-8 p-4">
  <h3 class="text-center text-secondary">Listado de Usuarios</h3>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">DNI</th>
          <th scope="col">Fecha de Nacimiento</th>
          <th scope="col">Correo</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
<?php 
    include 'modelo/conexion.php';
    $sql = $conexion->query("SELECT * FROM personas");
    while($datos = $sql->fetch_object()){ ?>
<tr>
  <td><?=$datos->id_persona?></td>
  <td><?=$datos->nombre?></td>
  <td><?=$datos->apellido?></td>
  <td><?=$datos->dni?></td>
  <td><?=$datos->fecha_nac?></td>
  <td><?=$datos->correo?></td>
  <td>
      <i class="fa-solid fa-pen-to-square"></i>
      <i class="fa-solid fa-trash"></i>
      </td>
</tr>
<?php }
?>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>12314</td>
      <td>15/04/1902</td>
      <td>mark@mdo</td>
      <td>
      <i class="fa-solid fa-pen-to-square"></i>
      <i class="fa-solid fa-trash"></i>
      </td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>12314</td>
      <td>15/04/1902</td>
      <td>jacob@gmail.com</td>
      <td>
      <i class="fa-solid fa-pen-to-square"></i>
      <i class="fa-solid fa-trash"></i>
      </td>
    </tr>
    <tr>
      <td>Larry</td>
      <td>the Bird</td>
      <td>123151</td>
      <td>15/04/1902</td>
      <td>larry@giaf</td>
      <td>
      <i class="fa-solid fa-pen-to-square"></i>
      <i class="fa-solid fa-trash"></i>
      </td>
    </tr>
  </tbody>
</table>
</div>
</form>
</body>
</html>