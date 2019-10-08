
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
      <div class="cont-a">
        <div class="fil-titu">
          <div class="opt-text">
            Filtros
          </div>
          <div class="fil-icon">
            <ion-icon name="options"></ion-icon>
          </div>
        </div>
        <form class="fil-sec-opt" action="list.php" method="get">
          <div class="fil-sec-titu">Tipo</div>
          <ul>
            <li><input type="radio" name="tipo" value="remeras"> Remeras</li>
            <li><input type="radio" name="tipo" value="pantal"> Pantalones</li>
            <li><input type="radio" name="tipo" value="calzado"> Calzado</li>
            <li><input type="radio" name="tipo" value="buzos"> Buzos</li>
            <li><input type="radio" name="tipo" value="camper"> Camperas</li>
            <li><input type="radio" name="tipo" value="ropaint"> Ropa interior</li>
            <li><input type="radio" name="tipo" value="acceso"> Accesorios</li>
          </ul>
        </form>
        <form class="fil-sec-opt" action="list.php" method="get">
          <div class="fil-sec-titu">Talle</div>
          <ul>
            <li><input type="radio" name="talle" value="remeras"> 34</li>
            <li><input type="radio" name="talle" value="pantal"> 36</li>
            <li><input type="radio" name="talle" value="calzado"> 38</li>
            <li><input type="radio" name="talle" value="buzos"> 40</li>
            <li><input type="radio" name="talle" value="camper"> 42</li>
            <li><input type="radio" name="talle" value="ropaint"> 44</li>
            <li><input type="radio" name="talle" value="acceso"> 46</li>
          </ul>
        </form>
      </div>
      <div class="cont-b">
        <div class="opciones">
          <div class="opcion">
            <div class="vista">
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
          <div class="opcion opt-filt">
            <div class="opt-text">
              Filtrar
            </div>
            <div class="opt-icon">
              <ion-icon name="options"></ion-icon>
            </div>
          </div>
        </div>
        <section class="productos">
          <?php for ($i=0; $i < 9; $i++) {
            echo '  <article class="producto">
            <div class="imagen-p">
            <img src="img/macbook.jpg" alt="Macbook">
            </div>
            <div class="info-p">
            <p class="titulo-p">Macbook i5 OFERTA DEL AÑO</p>
            <p><b>1303$ ARS</b> 20%off</p>
            <label for="">Buenos Aires</label>
            </div>
            <div class="fav-p">
            <ion-icon name="heart-empty"></ion-icon>
            </div>
            </article>';
          } ?>
        </section>
      </div>
    </main>
    <?php require_once("partials/nav-menu.php");?>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
