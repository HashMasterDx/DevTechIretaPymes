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
    $('#registerEmp').submit(function(event){
      event.preventDefault();
      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        beforeSend: function(){
          $('#res-regEmp').html('Validando Registro <br><img src="assets/imgAsset/Update.gif" class="center-all-contens">');
        },
        success: function(data){
          $('#res-regEmp').html(data);
        },
        error: function(){
          $('#res-regEmp').html('Error en la inserción');
        }
      });
      return false;
    });
  });
</script>


<div class="container" style="margin-bottom: 80px;">
  <div class="jumbotron text-center" style="margin-bottom:0">
    <div class="">
      <h5>Bienvenido al registro, por favor introduce tus datos para poder procesar tu solicitud.</h5> 
      <hr style="border: 1px solid;">
    </div>
  </div>
  <form  id="registerEmp" action="process/register.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <div class="form-group">
      <label for="inputNombreEmpresa">Ingrese Nombre de su Empresa</label>
      <input type="" name="inputNombreEmpresa" class="form-control" placeholder="Nombre Empresa" required autofocus>
    </div>

    
    <div class="form-group">
      <label for="inputDescripcionEmpresa">Descripcion de la empresa</label>
      <input type="" name="inputDescripcionEmpresa" class="form-control" placeholder="Descripcion de la empresa" required>
    </div>

    <div class="form-group">
      <label for="inputNombre">Nombre(s) del dueño</label>
      <input type="" name="inputNombre" class="form-control" placeholder="Nombre" required>
    </div>

    <div class="form-group">
      <label for="inputApellido">Apellido(s) del dueño</label>
      <input type="" name="inputApellido" class="form-control" placeholder="Apellido" required>
    </div>

    <div class="form-group">
       <label for="inputEmail">Email</label>
       <input type="email" name="inputEmail" class="form-control" placeholder="Email" required autofocus>
    </div>

    <div class="form-group">
      <label for="inputTelefono">Telefono</label>
      <input type="" name="inputTelefono" class="form-control" placeholder="Telefono" required>
    </div>

    <div class="form-group">
      <label for="inputRfc">Rfc</label>
      <input type="" name="inputRfc" class="form-control" placeholder="Rfc" required>
    </div>

    <div class="form-group">
      <label for="inputCiudad">Ciudad</label>
      <input type="" name="inputCiudad" class="form-control" placeholder="Ciudad" required>
    </div>

    <div class="form-group">
      <label>Imagen de producto/servicio</label>
      <input type="file" name="imagenEmp" class="form-control" accept=".jpg,.png,.gif,.jpeg">
      <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
    </div>
    <div class="form-group">
      <center>
        <button type="sumbit" class="btn btn-primary">Registrarme</button>
      </center>
    </div>
  </form>
</div>


</body>
</html>
