<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sigma - Home</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php require_once("partials/header.php");?>
    <div class="banner">
      <div class="banner-text">
        <h2><b>Oferta!</b></h2>
        <p>Haz click para saber más.</p>
      </div>
      <div class="banner-img">
        <img src="img/iphone.png" alt="iPhone 11 de Oferta">
      </div>
    </div>

    <main class="container">
      <div class="ordenar">
        <a href="list.php">
        <ion-icon name="list-box"></ion-icon>
        <h3>Ver en lista</h3>
        </a>
      </div>
      <section class="productos">
        <article class="producto">
          <img src="img/macbook.jpg" alt="Macbook">
          <h4>Lorem ipsum dolor</h4>
        </article>

        <article class="producto">
          <img src="img/macbook.jpg" alt="Macbook">
          <h4>Lorem ipsum dolor</h4>
        </article>

        <article class="producto">
          <img src="img/macbook.jpg" alt="Macbook">
          <h4>Lorem ipsum dolor</h4>
        </article>

        <article class="producto">
          <img src="img/macbook.jpg" alt="Macbook">
          <h4>Lorem ipsum dolor</h4>
        </article>

        <div class="banner" id="banner">
          <div class="banner-text">
            <h2><b>Oferta!</b></h2>
            <p>Haz click para saber más.</p>
          </div>
          <div class="banner-img">
            <img src="img/iphone.png" alt="iPhone 11 de Oferta">
          </div>
        </div>

        <article class="producto">
          <img src="img/macbook.jpg" alt="Macbook">
          <h4>Lorem ipsum dolor</h4>
        </article>

        <article class="producto">
          <img src="img/macbook.jpg" alt="Macbook">
          <h4>Lorem ipsum dolor</h4>
        </article>

        <article class="producto">
          <img src="img/macbook.jpg" alt="Macbook">
          <h4>Lorem ipsum dolor</h4>
        </article>

        <article class="producto">
          <img src="img/products.png" alt="">
          <h4>Ver más productos</h4>
        </article>
      </section>
    </main>


    <!-- NOTE: Inicio de barra de navegacion -->
    <?php require_once("partials/nav-menu.php");?>


  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
