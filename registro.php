<!DOCTYPE html>
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
      <form class="regis-form" action="validar.php" method="post">
        <h2>Registro</h2>
        <hr size="1px" color="#ddd">
        <div class="campo name">
          <label for="name">Nombre</label>
          <input type="text" name="name" id="name" placeholder="Nombre">
        </div>
        <div class="campo surname">
          <label for="surname">Apellido</label>
          <input type="text" name="surname" id="surname" placeholder="Apellido">
        </div>
        <div class="campo mail">
          <label for="mail">Email</label>
          <input type="email" name="mail" id="mail" placeholder="Email">
        </div>
        <div class="campo pass">
          <label for="pass">Contraseña</label>
          <input type="password" name="pass" id="pass" placeholder="Contraseña">
        </div>
        <div class="campo rpass">
          <label for="rpass">Repita su contraseña</label>
          <input type="password" name="rpass" id="rpass" placeholder="Repetir contraseña">
        </div>
        <div class="campo terms">
          <input type="checkbox" name="terms" id="terms" value="y">
          <label for="terms">Acepto los Términos y Condiciones de este sitio web.</label>
        </div>
        <div class="campo button">
          <button type="submit" name="button">Registrarse</button>
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
