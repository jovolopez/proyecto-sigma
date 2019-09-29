<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sigma - Producto</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/productos.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php require_once("partials/header.php");?>

    <main class="container">
      <div class="articulos">
        <article class="articulo">
          <img src="img/macbook.jpg" alt="Macbook">

        </article>
      </div>

      <div class="descripcion">
        <div class="descripcion-text">
          <h2>Macbook Infinity 2019</h2>
          <hr size="1px" color="#ddd">
        </div>
        <div class="precio">
          <h2>Precio: 5000 U$D</h2>
        </div>
      </div>

      <div class="list">

        <h3>Caracteristicas</h3>
        <hr size="1px" color="#ddd">

        <ul>
          <li>Procesador ts-edith de 4 nucleos y 2.4GHz</li>
          <li>Almacenamiento 1T SSD y 32Gb ram DDR3</li>
          <li>Graficos Intel Iris Plus Graphics 655</li>
        </ul>

        </div>

        <div class="botones">
          <div class="comprar">
              <a href="checkout.php">
                <input type="submit" id="comprar" value="Comprar">
              </a>
          </div>
          <div class="carrito">
              <input type="submit" value="Agregar al carrito">
          </div>
        </div>

        <div class="banner">
          <div class="banner-text">
            <h2><b>Oferta!</b></h2>
            <p>Haz click para saber más.</p>
          </div>
          <div class="banner-img">
            <img src="img/iphone.png" alt="iPhone 11 de Oferta">
          </div>
        </div>

        <section class="productos">
          <article class="producto">
            <a href="productos.php">
              <img src="img/macbook.jpg" alt="Macbook">
              <p>Macbook Infinity 2019</p>
            </a>
          </article>

          <article class="producto">
            <a href="productos.php">
              <img src="img/macbook.jpg" alt="Macbook">
              <p>Macbook Infinity 2019</p>
            </a>
          </article>

          <article class="producto">
            <a href="productos.php">
              <img src="img/macbook.jpg" alt="Macbook">
              <p>Macbook Infinity 2019</p>
            </a>
          </article>

          <article class="producto">
            <a href="productos.php">
              <img src="img/macbook.jpg" alt="Macbook">
              <p>Macbook Infinity 2019</p>
            </a>
          </article>


    </main>
        <!-- NOTE: Inicio de barra de navegacion -->
        <?php require_once("partials/nav-menu.php");?>


</html>
