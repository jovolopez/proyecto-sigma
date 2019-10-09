<?php
require_once('funciones/curl.php');
require_once('funciones/usuarios.php');
require_once('funciones/validacion-login.php');
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Sigma</title>
  </head>
  <body>
    <?php require_once("partials/header.php");?>
    <main class="container">
      <form class="login-form" action="login.php" method="post">
        <h2>Iniciar sesión</h2>
        <hr size="1px" color="#ddd">
          <?php if ($_POST){echo print_errores($errores);}?>
        <div class="campo mail">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div class="campo pass">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Contraseña">
        </div>
        <div class="campo remem">
          <input type="checkbox" name="remem" id="remem" value="y">
          <label for="remem">Mantentener sesión iniciada</label>
        </div>
        <div class="campo button">
          <button type="submit" name="button">Iniciar sesión</button>
        </div>
      </form>
    </main>

    <?php require_once("partials/nav-menu.php");?>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
