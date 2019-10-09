<?php
//**** VALIDACION REGISTRO ****
//declaro variables para la persistencia
$errores = [
'errornombre' => "",
'errorapellido' => "",
'erroremail' => "",
'errorpassword' => "",
'errorterm' => "",
'errorfoto' => ""
];
$error = false;
$nombre = '';
$apellido = '';
$email = '';
$password = '';
$passrep = '';
//VALIDACION UNICAMENTE UTIL PARA REGISTRO
//validacion de campos
if ($_POST) {
  $nombre = trim($_POST["nombre"]);
  $apellido = trim($_POST["apellido"]);
  $email = trim($_POST["email"]);
  $password = $_POST["password"];
  $passrep = $_POST["rpass"];
  // comprobando errores
  if (strlen($nombre) < 2){
    $errores['errornombre'] = "Escriba su nombre";
    $nombre = '';
    $error = true;
  }
  if (strlen($apellido) < 2) {
    $errores['errorapellido'] = "Escriba su apellido";
    $apellido = '';
    $error = true;
  }
  if (strlen($email) == 0) {
    $errores['erroremail'] = "Escriba un email";
    $email = '';
    $error = true;
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errores['erroremail'] = "Escriba un email válido";
    $email = '';
    $error = true;
  }
  if (strlen($password) == 0){
    $errores['errorpassword'] = "Escriba una contraseña";
    $password = '';
    $passrep = '';
    $error = true;
  } elseif (strlen($password) < 8) {
    $errores['errorpassword'] = "Escriba una contraseña con al menos 8 caracteres";
    $password = '';
    $passrep = '';
    $error = true;
  } elseif ($password != $passrep) {
    $errores['errorpassword'] = "Las contraseñas no coinciden";
    $passrep = '';
    $error = true;
  }
  if (empty($_POST["terms"])) {
    $errores['errorterm'] = "Debe aceptar los terminos y condiciones";
    $error = true;
  }
  //FOTO DE PERFIL OPCIONAL
  // validacion de foto
  if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
				$errores['errorfoto'] = "El formato de la foto debe ser 'png', 'jpg' o 'jpeg'";
        $error = true;
    } elseif ($_FILES['foto']['size'] > 10485760) {
      $errores['errorfoto'] = "La foto debe pesar menos de 10MB";
      $error = true;
    } elseif (strlen($errores['erroremail']) > 0){
      $errores['errorfoto'] = "Debe escribir un email válido para subir una foto";
      $error = true;
    } else {
      cargar_foto($_FILES['foto']['tmp_name'], $email, $ext);
    }

  } elseif ($_FILES['foto']['error'] === UPLOAD_ERR_NO_FILE) {
    //no hacer nada
  } else {
    //acá es por si hubo un error de subida externo a la validacion
    $errores['errorfoto'] = "La foto no se subió correctamente, intente de nuevo";
    $error = true;
  }

  //recorriendo e impriemiendo errores
  // *ESTA FUNCION SE PUEDE USAR TAL CUAL PARA IMPRIMIR UN ARRAY
  // DE ERRORES DE OTRA PAGINA (COMO LOGIN)*

  function print_errores($array){
    echo '<div class="errores"><ul>';
    foreach ($array as $value) {
      if (strlen($value) > 0){
        echo '<li>' . $value . '</li>';
      }
    }
    echo '</ul></div>';
  }

  //LO QUE HAREMOS SI TODO SALE CORRECTAMENTE:
  if ($error === false){
    $fotoname = $email . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    $passhash = password_hash($password, PASSWORD_DEFAULT);
    //establecemos los datos
    $usuario = [
    'nombre' => $nombre,
    'apellido' => $apellido,
    'email' => $email,
    'password' => $passhash,
    'foto' => $fotoname];
    //mandamos los datos a la base de datos
    crear_usuario($usuario);
    //$usuario = peticionCurl('http://apiusers.juancarlosdh.dhalumnos.com/api/users', 'POST', $datos);
    if (isset($_POST["recuer"])){
      login($email);
    }

  }
}


// NOTE: Validador de LOGIN.
