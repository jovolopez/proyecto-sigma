
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
      <div class="opciones">
        <div class="opcion">
          <div class="ordenar">
            <div class="vista-c">
              <a href="home.php">
                <ion-icon name="grid"></ion-icon>
              </a>
            </div>
            <div class="barra">
              |
            </div>
            <div class="vista-l">
              <a href="list.php">
                <ion-icon name="list-box"></ion-icon>
              </a>
            </div>
          </div>
        </div>
        <div class="opcion">
          <div class="opt-text">
            Ordenar
          </div>
          <div class="opt-icon">
            <ion-icon name="arrow-dropdown"></ion-icon>
          </div>
        </div>
        <div class="opcion">
          <div class="opt-text">
            Filtrar
          </div>
          <div class="opt-icon">
            <ion-icon name="options"></ion-icon>
          </div>
        </div>
      </div>
      <section class="productos">
        <article class="producto">
          <div class="imagen-p">
            <img src="img/macbook.jpg" alt="Macbook">
          </div>
          <div class="info-p">
            <p class="titulo-p">Macbook i5 OFERTA DEL AÑO</p>
            <p><b>1303$ ARS</b> 20%off</p>
            <label for="">Buenos Aires</label>
          </div>
        </article>

        <article class="producto">
          <div class="imagen-p">
            <img src="img/macbook.jpg" alt="Macbook">
          </div>
          <div class="info-p">
            <p>Lorem ipsum dolor</p>
          </div>
        </article>

        <article class="producto">
          <div class="imagen-p">
            <img src="img/macbook.jpg" alt="Macbook">
          </div>
          <div class="info-p">
            <p>Lorem ipsum dolor</p>
          </div>
        </article>

        <article class="producto">
          <div class="imagen-p">
            <img src="img/macbook.jpg" alt="Macbook">
          </div>
          <div class="info-p">
            <p>Ver más productos</p>
          </div>
        </article>

      </section>
    </main>
    <?php require_once("partials/nav-menu.php");?>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
