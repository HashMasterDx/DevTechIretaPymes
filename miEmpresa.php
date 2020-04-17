<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
  include 'inc/link.php';
   ?>
  
</head>
<body>

<?php 
  include 'inc/navbar.php';
  include 'process/serverConfig.php';
  include 'process/consultSQL.php';
 ?>

<div class="jumbotron text-center" style="margin-bottom:0">
  <div class="">
    <h1>La Uarecita</h1>
  </div>
  <hr style="border: 1px solid;">
  <br>
  <div class="">
    <h5>Bienvenido a tu panel, aquí podrás agregar o editar productos y/o servicios existentes de tu empresa</h5> 
  </div>
  
</div>
<br>
<div class="container-fluid text-center" style="margin-bottom: 80px">

<div class="row">
  <div class="col-sm-6">
    <div class="card" >
      <div class="card-body">
        <h5 class="card-title text-uppercase pTitulos">Agregar un producto</h5>
        <hr style="border: .5px solid;">
        <p class="card-text">Registra nuevos productos en de tu empresa en tu detalle</p>
        <a href="registroProdSerForm.php" class="btn btn-primary">Agregar</a>
      </div>
    </div>
  </div>
  <br>
  <div class="col-sm-6">
    <div class="card" >
      <div class="card-body">
        <h5 class="card-title text-uppercase pTitulos">Modificar/Eliminar un producto</h5>
        <hr style="border: .5px solid;">
        <p class="card-text">Elimina o modifica detalles de los productos y servicios que tienes registrados</p>
        <a href="#" class="btn btn-primary">Modificar/Elminar</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
