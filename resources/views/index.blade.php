

<!DOCTYPE html>
<html lang="es">
<head>
    <title>:: Gestion ::</title>
    <link rel="icon" href="images/Database.ico" />
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet" />
</head>
<body>
<div class="container">
    <div>
        <br>
        <br>
        <br>
    </div>
    <!--    Esta es la parte visible de la imagen anterior-->
    <div class="signin-descripcion bg-primary">
        <span class="">
          <em>Gestión y Control de Activos</em>
        </span>
        <div><b>ECO FARMACIAS</b></div>
    </div>

    <form action="loginProceso.php" method="post" class="form-signin" role="form">
        <div class="well">
            <h2 class="form-signin-heading text-primary">Iniciar Sesi&oacute;n</h2>
            <!--            Acá se presentan los input y el botón para iniciar sesión-->
            <label for="inputUser" class="sr-only">Usuario</label>
            <input name="user" id="inputUser" class="form-control input-sm" placeholder="Usuario" required="" autofocus="" type="text" />
            <label for="inputPassword" class="sr-only">Password</label>
            <input name="pass" id="inputPassword" class="form-control input-sm" placeholder="Contrase&ntilde;a" required="" type="password"  min="6" max="30" />
            <br>
            <button class="btn btn-primary btn-md btn-block" type="submit">Acceder</button>
            <input type="hidden" name="login" value="" />
        </div> <!-- /pozo -->
    </form>
</div> <!-- /container -->
</body>
</html>
