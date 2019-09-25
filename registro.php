<?php
$errores = [
'errornombre' => "",
'errorapellido' => "",
'erroremail' => "",
'errorpassword' => "",
'errorterm' => ""
];
$error = false;
if ($_POST) {
  $nombre = trim($_POST["nombre"]);
  $apellido = trim($_POST["apellido"]);
  $email = trim($_POST["email"]);
  $password = $_POST["password"];
  $passrep = $_POST["rpass"];
  if (strlen($nombre) < 2){
    $errores['errornombre'] = "Escriba su nombre";
    $error = true;
  }
  if (strlen($apellido) < 2) {
    $errores['errorapellido'] = "Escriba su apellido";
    $error = true;
  }
  if (strlen($email) == 0) {
    $errores['erroremail'] = "Escriba un email";
    $error = true;
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errores['erroremail'] = "Escriba un email válido";
    $error = true;
  }
  if (strlen($password) == 0){
    $errores['errorpassword'] = "Escriba una contraseña";
    $error = true;
  } elseif (strlen($password) < 8) {
    $errores['errorpassword'] = "Escriba una contraseña con al menos 8 caracteres";
    $error = true;
  } elseif ($password != $passrep) {
    $errores['errorpassword'] = "Las contraseñas no coinciden";
    $error = true;
  }
  if (empty($_POST["terms"])) {
    $errores['errorterm'] = "Debe aceptar los terminos y condiciones";
    $error = true;
  }
  function print_array($array){
    foreach ($array as $value) {
      if (strlen($value) > 0){
        echo $value . '<br>';
      }
    }
  }
}
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro</title>
  </head>
  <body>
    <header>
      <a href="perfil.php"><ion-icon name="arrow-back" size="large"></ion-icon></a>
      <h1>Sigma</h1>
      <ion-icon name="ios-search" size="large"></ion-icon>
    </header>
    <main class="container">
      <form class="regis-form" action="registro.php" method="post">
        <h2>Registro</h2>
        <hr size="1px" color="#ddd">
        <?php if ($_POST){echo print_array($errores);}?>
        <div class="campo name">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="name" placeholder="Nombre">
        </div>
        <div class="campo surname">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="surname" placeholder="Apellido">
        </div>
        <div class="campo mail">
          <label for="email">Email</label>
          <input type="text" name="email" id="mail" placeholder="Email">
        </div>
        <div class="campo pass">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="pass" placeholder="Contraseña">
        </div>
        <div class="campo rpass">
          <label for="rpass">Repita su contraseña</label>
          <input type="password" name="rpass" id="rpass" placeholder="Repetir contraseña">
        </div>
        <div class="campo terms">
          <input type="checkbox" name="terms" id="terms">
          <label for="terms">Acepto los Términos y Condiciones de este sitio web.</label>
        </div>
        <div class="campo button">
          <button type="submit">Registrarse</button>
        </div>
      </form>
    </main>
    <div class="nav-menu">
      <div><a href="home.php"><ion-icon class="nav-icon" name="home"></ion-icon></a></div>
      <div><a href="list.php"><ion-icon class="nav-icon" name="list"></ion-icon></a></div>
      <div><a href="cart.php"><ion-icon class="nav-icon" name="cart"></ion-icon></a></div>
      <div><a href="perfil.php"><ion-icon class="nav-icon" name="person"></ion-icon></a></div>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
