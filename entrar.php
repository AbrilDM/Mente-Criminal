<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="entrarestilos.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title> Entrar </title>
  </head>
  <body>

    <div class="container">

      <main>
        <h2>Entrar</h2>

        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="Usuario">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"></label>
            <div class="col-sm-8">
              <input type="password" class="form-control" placeholder="Contraseña">
            </div>
          </div>
        </form>

        <div class="recordar">
          <label>
            <input type="checkbox" name="Recordarme" value="Recordarme">
            Recordarme
          </label>
        </div>

        <div class="col-sm-9 ">
          <div class="boton">
            <button type="button" class="btn btn-default btn-lg">
              <a href="eleccion.php"> Entrar </a>
            </button>
          </div>
        </div>

        <div class="olvido">
          <a href="#">¿Has olvidado tu contraseña?</a>
        </div>

        <div class="col-sm-9 ">
          <div class="botons">
            <button type="button" class="btn btn-default btn-lg">
              <a href="http://Facebook.com" target="_blank"> Entrar con Facebook </a>
            </button>
          </div>
        </div>

        <p>Accediendo aceptas los Términos y Condiciones y las Políticas de <br>Privacidad.</p>

      </main>
    </div>
    <!--<link rel="stylesheet" href="jquery.js">-->
  </body>
</html>
