<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkout.css">
    <title>Checkout - Sigma</title>
  </head>
  <body>
    <?php require_once("partials/header.php") ?>
    <main>
      <div id="1" class="container items">
      <h2>Revisa tus productos.</h2>
        <div class="carro">
          <?php // NOTE: Comienza el listado del carro ?>
          <ul>
            <li>
              <div class="producto">
                  <div class="unidad">
                    <h6>Nombre del Producto</h6>
                    <small>Breve descripcion</small>
                  </div>
                  <span>$1100</span>
              </div>
            </li>

            <li>
              <div class="producto">
                  <div class="unidad">
                    <h6>Segundo Producto</h6>
                    <small>Breve descripcion</small>
                  </div>
                  <span>$20</span>
              </div>
            </li>

            <li>
              <div class="producto">
                  <div class="unidad">
                    <h6>Tercer Producto</h6>
                    <small>Breve descripcion</small>
                  </div>
                  <span>$49</span>
              </div>
            </li>
          </ul>
          <?php // NOTE: Termina listado de carro y comienza el total ?>

          <div class="total">
              <div class="unidad">
                <h6>Total</h6>
              </div>
              <span style="color: green;">$1169</span>
          </div>
        </div> <?php // NOTE: Fin carro, fin total. ?>

        <div class="checkout">
          <button id="submit-button" type="submit" name="button"><a href="#2">Siguiente</a></button>
        </div>

      </div> <?php // NOTE: Fin container 1 pagina del carro ?>

      <?php // NOTE: Comienza el formulario de datos de envio. Se recicla los div de carro, producto y checkout ?>
      <div id="2" class="container envio">
        <h2>Ingresa dónde quieres recibir tu compra.</h2>
        <div class="carro">
          <div class="producto">
            <form class="datos-de-envio" action="checkout.php" method="post">
              <label for="direccion">Dirección</label>
              <br>
              <input type="text" name="direccion" value="" placeholder="Av. 9 de Julio 1234" required>
              <br>
              <label for="localidad">Localidad</label>
              <br>
              <input type="text" name="localidad" value="" placeholder="CABA" required>
              <br>
              <label for="postal">Codigo Postal</label>
              <br>
              <input type="number" name="postal" value="" placeholder="1675">
              <br>
              <label for="nota">Notas</label>
              <br>
              <input type="text" name="nota" value="" placeholder="Tocar timbre rojo">
              <br>
          </div>
        </div>

        <div class="checkout">
          <button id="submit-button" type="submit" name="button"><a href="#3">Proceder al pago.</a></button>
      </div>
      </div>
              </form><?php // NOTE: Fin Datos de envio ?>
      <div id="3" class="container tarjeta">
        <h2>Ingresa los datos de tu tarjeta.</h2>
        <div class="carro">
          <div class="producto">
            <form class="datos-tarjeta" action="checkout.php" method="post">
              <label for="card-holder">Nombre del titular</label>
              <br>
              <input type="text" name="card-holder" value="" placeholder="John Doe" required>
              <br>
              <label for="numeros">16 digitos</label>
              <br>
              <input type="number" name="" value="" placeholder="XXXX-XXXX-XXXX-XXXX" required>
              <br>
              <label for="exp-date">MM</label>
              <input type="number" name="exp-date" value="" placeholder="MM" required>
              <br>
              <label for="exp-year">AA</label>
              <input type="number" name="exp-year" value="" placeholder="AA" required>
            </form>
          </div>
        </div>
        <div class="checkout">
            <input id="submit-button" type="submit" name="" value="Procesar orden">
        </div>
      </div>


    </main>
    <?php require_once("./partials/nav-menu.php") ?>
  </body>
</html>
