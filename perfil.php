<?php require_once('funciones/usuarios.php');
session_start(); ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sigma - Perfil de Usuario</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
  </head>
  <body>
  <?php require_once("partials/header.php");?>

  <div class="container">
    <div class="banner">
      <div class="banner-img">
        <img src="img/profile.png" alt="Perfil">
      </div>
      <div class="banner-text">
        <h2><?php if (comprobar_logeo() == true) {
          echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];
        } else {
          echo "No iniciaste sesion aún";
        } ?></h2>
      </div>
    </div>
<?php if (comprobar_logeo() == true) {
  echo '<div class="sesion">
      <a href="logout.php"><b>Logout</b></a>
    </div>';
} else {
  echo '<div class="sesion">
      <a href="login.php"><b>Iniciar sesión</b></a>
      <p>o</p>
      <a href="registro.php"><b>Registrarse</b></a>
    </div>';
} ?>
    <div class="opciones">
      <div class="opcion">
        <ion-icon class="icon" name="card"></ion-icon>
        <p>Datos de pago</p>
      </div>
      <div class="opcion">
        <ion-icon class="icon" name="home"></ion-icon>
        <p>Datos de envío</p>
      </div>
      <div class="opcion">
        <ion-icon class="icon" name="cube"></ion-icon>
        <p>Estados de mis pedidos</p>
      </div>
      <div class="opcion">
        <ion-icon class="icon" name="key"></ion-icon>
        <p>Cambiar contraseña</p>
      </div>

    </div>
  </div>

  <!-- NOTE: Inicio de barra de navegacion -->
  <?php require_once("partials/nav-menu.php");?>


  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
