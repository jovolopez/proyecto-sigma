
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro</title>
  </head>
  <body>
    <?php require_once("partials/header.php");?>
    <main class="container">
      <form class="login-form" action="validar.php" method="post">
        <h2>Iniciar sesión</h2>
        <hr size="1px" color="#ddd">
        <div class="campo mail">
          <label for="mail">Email</label>
          <input type="email" name="mail" id="mail" placeholder="Email">
        </div>
        <div class="campo pass">
          <label for="pass">Contraseña</label>
          <input type="password" name="pass" id="pass" placeholder="Contraseña">
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
