
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sigma - Home</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/lista.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php require_once("partials/header.php");?>

    <main class="container">
      <div class="ordenar">
        <a href="list.php">
        <ion-icon name="list-box"></ion-icon>
        <h3>Ver en cuadrícula</h3>
        </a>
      </div>
      <section class="productos">
        <article class="producto">
          <div class="imagen-p">
            <img src="img/macbook.jpg" alt="Macbook">
          </div>
          <div class="info-p">
            <h4>Lorem ipsum dolor</h4>
          </div>
        </article>

        <article class="producto">
          <div class="imagen-p">
            <img src="img/macbook.jpg" alt="Macbook">
          </div>
          <div class="info-p">
            <h4>Lorem ipsum dolor</h4>
          </div>
        </article>

        <article class="producto">
          <div class="imagen-p">
            <img src="img/macbook.jpg" alt="Macbook">
          </div>
          <div class="info-p">
            <h4>Lorem ipsum dolor</h4>
          </div>
        </article>

        <article class="producto">
          <div class="imagen-p">
            <img src="img/macbook.jpg" alt="Macbook">
          </div>
          <div class="info-p">
            <h4>Ver más productos</h4>
          </div>
        </article>

      </section>
    </main>
    <?php require_once("partials/nav-menu.php");?>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
