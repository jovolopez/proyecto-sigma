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
      <div class="productos">
        <article class="producto">
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
    </main>
        <!-- NOTE: Inicio de barra de navegacion -->
        <?php require_once("partials/nav-menu.php");?>


  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
