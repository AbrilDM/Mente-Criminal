<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title> Registro </title>
  </head>
  <body>
    <div class="container">
    <header> <div class="caja_vacia"></div> </header> <!-- Esta caja es para hacer el pading y que quede centrado nuestro texto -->
    <main>
    <h1> Registrate </h1>

    <form class="form-horizontal">

      <div class="form-group">
        <img src="images/icono_usuario.png" alt="Icono Usuario" width="20px" class="img-rounded" />
        <label for="inputPassword3" class="col-sm-2 control-label">Usuario</label>
        <div class="col-sm-10">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Usuario">
          </div>
        </div>
      </div>

          <div class="form-group">
            <img src="images/icono_mail.png" alt="Icono Email" width="20px" class="img-rounded" />
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <img src="images/icono_candado.jpg" alt="Icono Contra" width="27px" class="img-rounded" />
            <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña">
            </div>
          </div>

          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Recuérdame
              </label>
            </div>
          </div>

      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default"> <a href="eleccion.php"> Ingresa </a></button>
        </div>
      </div>
    </form>
  </main>
  <footer> <div class="caja_vacia"></div> </footer> <!-- Esta caja también es para hacer el pading y que quede centrado nuestro texto -->
 </div>
 <link rel="stylesheet" href="jquery.js">
  </body>
</html>
