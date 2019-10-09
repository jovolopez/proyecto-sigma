<?php
function print_errores($array){
  echo '<div class="errores"><ul>';
  foreach ($array as $value) {
    if (strlen($value) > 0){
      echo '<li>' . $value . '</li>';
    }
  }
  echo '</ul></div>';
}


$errores = [
'erroremail' => "",
'errorpassword' => "",
];
$error = false;
$email = '';
$password = '';

if ($_POST) {
  $email = trim($_POST['email']);
  $password = $_POST['password'];

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
  }

}




?>
