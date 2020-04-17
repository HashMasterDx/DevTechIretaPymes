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
    <h1>Ireta MiPyMES</h1>
  </div>
  <br>
  <div class="">
    <h5>Bienvenido a Ireta MiPyMES, en este directorio encontrarás diferentes MiPyMES en conjunto con los distintos productos y servicios que ofrecen.</h5> 
  </div>
  <hr style="border: 1px solid;">
</div>
<div class="container-fluid text-center" style="margin-bottom: 80px">

<div class="row">
  <div class="col-sm-12">
    <div class="card" >
      <div class="card-body">
        <h5 class="card-title text-uppercase pTitulos">Registrate con nosotros!</h5>
        <p class="card-text">¡Registrate con nosotros y difunde mas tu MiPyME al mismo tiempo que ayudas a la economía del país!</p>
        <a href="registroForm.php" class="btn btn-primary pTitulos">Registro</a>
      </div>
    </div>
  </div>
</div>
<br>
  <div class="row">
    <div class="col-sm-12">
      <div class="card" >
        <div class="card-body">
          <h2 class="card-title text-uppercase">TOP 5 MiPyMES</h2>
        </div>
      </div>
    </div>
  
<?php 

$empresas = ejecutarSQL::consultar("select * from empresa");
for ($i=0; $i < count($empresas); $i++) { 
  echo '
  <div class="col-sm-6">
    <div class="card" >
      <div class="card-body">
        <img class="card-img-top img-fluid" src="'.$empresas[$i][12].'" alt="Card image cap" style="width: 18rem;">
        <h5 class="card-title text-uppercase">'.$empresas[$i][1].'</h5>
        <p class="card-text">'.$empresas[$i][2].'</p>
        <a href="detalleEmpresa.php?idEmp='.$empresas[$i][0].'" class="btn btn-primary">Ver empresa</a>
      </div>
    </div>
  </div>
  ';
}

 ?>


  </div>

<br>
<footer>
  <div class="container">
    <div class="row">
      
      <div class="col-lg-4 col-md-6">
        <h3>Titulo</h3>
        <ul class="list-unstyled socila-list">
          <li><img src="http://placehold.it/48x48" alt="" /></li>
          <li><img src="http://placehold.it/48x48" alt="" /></li>
          <li><img src="http://placehold.it/48x48" alt="" /></li>
          <li><img src="http://placehold.it/48x48" alt="" /></li>
          <li><img src="http://placehold.it/48x48" alt="" /></li>
          <li><img src="http://placehold.it/48x48" alt="" /></li>
        </ul>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <h3>Titulo</h3>
        <div class="media">
          <a href="#" class="pull-left">
            <img src="http://placehold.it/64x64" alt="" class="media-object" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">Subtitulo</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        
        <div class="media">
          <a href="#" class="pull-left">
            <img src="http://placehold.it/64x64" alt="" class="media-object" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">Subtitulo</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        
        <div class="media">
          <a href="#" class="pull-left">
            <img src="http://placehold.it/64x64" alt="" class="media-object" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">Subtitulo</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        
      </div>
      
      <div class="col-lg-4">
        <h3>TItulo</h3>
        <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
        <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
        <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
        <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
      </div>
      
    </div>
  </div>
</footer>
</body>
</html>
