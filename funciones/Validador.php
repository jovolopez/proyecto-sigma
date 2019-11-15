<?php

class Validador {

  public $bd;

  public function __construct() {
    $this->bd = new BaseDatos;
  }

  public function validarLogin($email, $password){

    $email = trim($email);

    if (strlen($email) == 0) {
      $errores['erroremail'] = "Escriba un email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errores['erroremail'] = "Escriba un email válido";
    }

    if (strlen($password) == 0){
      $errores['errorpassword'] = "Escriba una contraseña";
    } elseif (strlen($password) < 8) {
      $errores['errorpassword'] = "Escriba una contraseña con al menos 8 caracteres";
    }

    if (!isset($errores)) {

      $usuario = $this->bd->buscarUsuario($email);
      if ($usuario == null) {
        $errores['erroremail'] = "Email o contraseña incorrectos";
        return $errores;
      } elseif (!password_verify($password, $usuario->getPass())) {
        $errores['erroremail'] = "Email o contraseña incorrectos";
      } else {
        $this->bd->logear($usuario);
      }

    } else {
      return $errores;
    }

  }

  public function validarRegistro(){

  }

  public function validarAvatar(){
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
  }
}
