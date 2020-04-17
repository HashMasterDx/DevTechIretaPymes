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

<script type="text/javascript">
  $(document).ready(function(){
    $('#regProdSerr').submit(function(event){
      event.preventDefault();
      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        beforeSend: function(){
          $('#resProdSer').html('Validando Registro...');
        },
        success: function(data){
          $('#resProdSer').html(data);
        },
        error: function(){
          $('#resProdSer').html('Error en la inserción');
        }
      });
      return false;
    });
  });
</script>


<div class="container" style="margin-bottom: 80px;">
<div class="jumbotron text-center" style="margin-bottom:0">
    <div class="">
      <h5>Registra tu producto o servicio.</h5> 
      <hr style="border: 1px solid;">
    </div>
  </div>

<form  action="#" method="post" enctype="multipart/form-data" id="regProdSerr">
    
      <div class="form-group">
        <input type="hidden" name="idEmp" value="16">
      </div>

      <div class="form-group">
      <label>Nombre del producto/servicio</label>
      <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto o servicio">
    </div>

    <div class="form-group">
      <label>Descripción</label>
      <textarea name="descripcion" class="form-control" placeholder="Descripción del producto"></textarea>
    </div>
    <div class="form-group">
      <label>Precio $MXN</label>
      <input type="text" name="precio" class="form-control" placeholder="Precio en Pesos Mexicanos">
    </div>
    
    <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="prodser" value="1" checked>
        <label class="form-check-label">
          Producto
        </label>
    </div>
    <div class="form-check form-group">
        <input class="form-check-input" type="radio" name="prodser" value="2">
        <label class="form-check-label">
          Servicio
        </label>
    </div>
    <br>
    <div class="form-group">
      <label>Imagen de producto/servicio</label>
      <br>
      <input type="file" name="img" accept=".jpg,.png" required>
      <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
    </div>
    <div class="form-group">    
          <button type="sumbit" class="btn btn-primary">Registrar Producto</button>
    </div>
    <div id="resProdSer">
      
    </div>
    
  </form>
</div>
</body>
</html>
