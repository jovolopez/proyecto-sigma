
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto Sigma</title>
  </head>
  <body>
    <?php require_once("partials/header.php");?>
    <main class="container">
      <form class="contact-form" action="index.php" method="post">
        <h2>Contacto</h2>
        <hr size="1px" color="#ddd">
        <div class="Nombre">
          <label for="Nombre">Nombre</label>
          <input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
          </div>
          <div class="E-mail">
            <label for="E-mail">E-mail</label>
            <input type="email" name="E-mail" id="E-mail" placeholder="E-mail">
          </div>
          <div class="Telefono">
            <label for="Telefono">Telefono</label>
            <input type="tel" name="Telefono" id="Telefono" placeholder="Telefono">
          </div>
          <div class="Mensaje">
            <label for="Mensaje">Mensaje</label>
            <textarea name="Mensaje" id="Mensaje" rows="8" cols="80" placeholder="Escriba aqui su mensaje..."></textarea>
          </div>
          <div class="Boton">
            <input type="submit" id="boton" value="Enviar">
          </div>
      </form>
    </main>
    <!-- NOTE: Inicio de barra de navegacion -->
    <?php require_once("partials/nav-menu.php");?>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
      </body>
</html>
