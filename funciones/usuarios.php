<?php
function cargar_foto($archivo, $nombre, $ext) {
    if (file_exists('usuarios/fotos') == false) {
        mkdir('usuarios/fotos');
    }
    $nombrecomp = $nombre . '.' . $ext;
    move_uploaded_file($archivo, 'usuarios/fotos/' . $nombrecomp);
}
function crear_usuario($usuario) {
    if (file_exists('database') == false) {
        mkdir('database');
    }
    $base = file_get_contents('database/usuarios.json');
    $arrayusers = json_decode($base, true); //true porque todavía no la trabajamos como objeto
    $arrayusers[] = $usuario;
    $jsonusers = json_encode($arrayusers);
    file_put_contents('database/usuarios.json', $jsonusers);
}
function busca_users($email){
  $base = file_get_contents('database/usuarios.json');
  $arrayusers = json_decode($base, true);
  foreach ($arrayusers as $user) {
    if ($user['email'] == $email) {
      return $user;
    }
  }
  return '';
}
function login($email, $password) {
  $user = busca_users($email);
  if (isset($_POST["recuer"])){
    setcookie('recordar', $email, time() + 60*60*24*7);
  }
  if ($user) {
    if (password_verify($password, $user['password'])){
      $_SESSION['email'] = $email;
      $_SESSION['avatar'] = $user['foto'];
      header('location:perfil.php');
    }
  } else {
      header('location:login.php');
  }
}
function comprobar_logeo() {
  if (isset($_SESSION['email'])) {
    return true;
  }
  return false;
}
