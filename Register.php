<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
  :root
  {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem;
  }

  body 
  {
    background: #2AC2B2;
    background: linear-gradient(to right, #FF0800, #443B3A, #FF0800);
  }

  .card-signin
  {
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  }

  .card-signin .card-title
  {
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem;
  }

  .card-signin .card-body
  {
    padding: 2rem;
  }

  .form-signin
  {
    width: 100%;
  }

  .form-signin .btn {
    font-size: 80%;
    border-radius: 5rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s;
  }

  .form-label-group {
    position: relative;
    margin-bottom: 1rem;
  }

  .form-label-group input {
    height: auto;
    border-radius: 2rem;
  }

  .form-label-group>input,
  .form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x);
  }

  .form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    /* Override default `<label>` margin */
    line-height: 1.5;
    color: #495057;
    border: 1px solid transparent;
    border-radius: .25rem;
    transition: all .1s ease-in-out;
  }

  .form-label-group input::-webkit-input-placeholder {
    color: transparent;
  }

  .form-label-group input:-ms-input-placeholder {
    color: transparent;
  }

  .form-label-group input::-ms-input-placeholder {
    color: transparent;
  }

  .form-label-group input::-moz-placeholder {
    color: transparent;
  }

  .form-label-group input::placeholder {
    color: transparent;
  }

  .form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
  }

  .form-label-group input:not(:placeholder-shown)~label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #777;
  }

  .btn-google {
    color: white;
    background-color: #ea4335;
  }

  .btn-facebook {
    color: white;
    background-color: #3b5998;
  }

  @supports (-ms-ime-align: auto) {
    .form-label-group>label {
      display: none;
    }
    .form-label-group input::-ms-input-placeholder {
      color: #777;
    }
  }

  
</style>

</head>


<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Registro</h5>
            <form class="form-signin" >
              <div class="form-label-group">
                <input type="" id="inputNombreEmpresa" class="form-control" placeholder="Nombre Empresa" required autofocus>
                <label for="inputNombreEmpresa">Ingrese Nombre de su Empresa</label>
              </div>

              <div class="form-label-group">
                <input type="" id="inputDescripcionEmpresa" class="form-control" placeholder="Descripcion de la empresa" required>
                <label for="inputDescripcionEmpresa">Descripcion de la empresa</label>
              </div>

              <div class="form-label-group">
                <input type="" id="inputNombre" class="form-control" placeholder="Nombre" required>
                <label for="inputNombre">Nombre(s) del dueño</label>
              </div>

              <div class="form-label-group">
                <input type="" id="inputApellido" class="form-control" placeholder="Apellido" required>
                <label for="inputApellido">Apellido(s) del dueño</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                <label for="inputEmail">Email</label>
              </div>

              <div class="form-label-group">
                <input type="" id="inputTelefono" class="form-control" placeholder="Telefono" required>
                <label for="inputTelefono">Telefono</label>
              </div>

              <div class="form-label-group">
                <input type="" id="inputRfc" class="form-control" placeholder="Rfc" required>
                <label for="inputRfc">Rfc</label>
              </div>

              <div class="form-label-group">
                <input type="" id="inputCiudad" class="form-control" placeholder="Ciudad" required>
                <label for="inputCiudad">Ciudad</label>
              </div>
              
              <div class="form-label-group">
                <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
                  <input type="file" name="imagen" />
                </form>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
