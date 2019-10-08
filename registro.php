<?php
require_once('funciones/curl.php');
require_once('funciones/usuarios.php');
require_once('funciones/validacion.php');
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro</title>
  </head>
  <body>
    <?php require_once("partials/header.php");?>
    <main class="container">
      <form class="regis-form" action="registro.php" method="post" enctype="multipart/form-data">
        <h2>Registro</h2>
        <hr size="1px" color="#ddd">
          <?php if ($_POST){echo print_errores($errores);}?>
        <div class="campo foto">
          <label for="foto">Suba una foto</label>
          <input type="file" name="foto" value="" id="foto">
        </div>
        <div class="campo name">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="name" placeholder="Nombre" value="<?= $nombre; ?>">
        </div>
        <div class="campo surname">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="surname" placeholder="Apellido" value="<?= $apellido; ?>">
        </div>
        <div class="campo mail">
          <label for="email">Email</label>
          <input type="text" name="email" id="mail" placeholder="Email" value="<?= $email; ?>">
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
          <input type="checkbox" name="terms" id="terms" class="check">
          <label for="terms">Acepto los Términos y Condiciones de este sitio web.</label>
        </div>
        <div class="campo recuer">
          <input type="checkbox" name="recuer" id="recuer" class="check">
          <label for="recuer">Mantener sesión iniciada</label>
        </div>
        <div class="campo button">
          <button type="submit">Registrarse</button>
        </div>
      </form>
    </main>
    <?php require_once("partials/nav-menu.php");?>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
