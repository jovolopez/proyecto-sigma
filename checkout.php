<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Checkout - Sigma</title>
    <link rel="stylesheet" href="css/checkout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
    <?php require_once("partials/header.php");?>
  <body>
    <main>
    <div class="contenedor">
      <div class="carro">
        <div class="productos">
          <div class="img-producto">
            <img src="img/iphone.png" alt="">
          </div>
          <div class="desc-producto">
            <p>iPhone 11 Pro - 64GB </p>
          </div>
          <div class="precio-producto">
            <p>U$D 1.100</p>
          </div>
        </div>
      </div>

        <div class="total">
          <p>Total:</p>
          <br>
          <strong>U$D1.100</strong>
        </div>


      <div class="tarjeta">
        <div class="emisor">

        </div>
        <div class="datos-tarjeta">
          <form class="" action="checkout.php" method="post">
            <label for="numeros">Número de Tarjeta</label>
            <input id="num-tarjeta" type="number" name="numeros" value="" placeholder="16 dígitos de la tarjeta" required>

            <label for="exp-mes">Mes de expiración</label>
            <select name="exp-mes" form="">
              <?php for ($i=1; $i <= 12 ; $i++) {
                echo '<option value="'.$i.'">'.$i.'</option>';
              } ?>
            </select>

            <label for="exp-año">Año de expiración</label>
            <select name="exp-año" form="">
              <?php for ($i=2019; $i <= 2035 ; $i++) {
                echo '<option value="'.$i.'">'.$i.'</option>';
              } ?>
            </select>

            <label for="CVV">CVV</label>
            <input type="number" name="CVV" value="" placeholder="CVV" required>
            <br>
            <input type="submit" name="" value="Procesar Pago">
          </form>
        </div>
      </div>
    </div>
    </main>
  </body>
    <?php// require_once("partials/nav-menu.php");?>
</html>
