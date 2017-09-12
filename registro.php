<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="registrosestilos.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title> Registrate </title>
  </head>
  <body>

    <div class="container">

      <main>
        <h2>Registrate</h2>

        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"></label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="Usuario">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"></label>
            <div class="col-sm-8">
              <input type="password" class="form-control" placeholder="Password">
            </div>
          </div>
        </form>

        <div class="mostrar">
          <label>
            <input type="checkbox" name="Mostrame" value="Mostrame">
            Mostrar contraseña
          </label>
        </div>

        <div class="col-sm-9 ">
          <div class="boton">
            <button type="button" class="btn btn-default btn-lg">
              <a href="entrar.php"> Registrar </a>
            </button>
          </div>
        </div>

        <div class="col-sm-9 ">
          <div class="botons">
            <button type="button" class="btn btn-default btn-lg">
              <a href="http://Facebook.com" target="_blank"> Entrar con Facebook </a>
            </button>
          </div>
        </div>

        <div class="terminos">
          <p>Accediendo aceptas los Términos y Condiciones y las Políticas de <br>Privacidad.</p>
        </div>

      </main>
    </div>
    <!--<link rel="stylesheet" href="jquery.js">-->
  </body>
</html>
