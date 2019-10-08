<?php
function cargar_foto($archivo, $nombre, $ext) {
    if (file_exists('usuarios/fotos') == false) {
        mkdir('usuarios/fotos');
    }
    $nombrecomp = $nombre . '.' . $ext;
    move_uploaded_file($archivo, 'usuarios/fotos/' . $nombrecomp);
}
function buscarUsuarioEmail(string $email) {
    $archivo = file_get_contents('database/usuarios.json');
    $usuarios = json_decode($archivo, true);
    foreach ($usuarios as $usuario) {
        if ($usuario['email'] == $email) {
            return $usuario;
        }
    }
    return [];
}
function guardarUsuario(array $usuario) {
    if (!file_exists('database')) {
        mkdir('database');
    }
    //me traigo el archivo entero
    $archivo = file_get_contents('database/usuarios.json');
    $usuarios = json_decode($archivo, true);

    $usuarios[] = $usuario;
    $usuariosJson = json_encode($usuarios);
    file_put_contents('database/usuarios.json', $usuariosJson);
}
function estaElUsuarioLogeado() {
    if (isset($_SESSION['email'])) {
        return true;
    }
    return false;
}
function logear($email) {
    //deberia de buscar al usuario en la BD
    $usuario = buscarUsuarioEmail($email);
    if ($usuario) {
     //si existe lo logeo
        $_SESSION['email'] = $email;
        $_SESSION['avatar'] = $usuario['avatar'];
    } else {
        destruirRecuerdame();
        //sino lo redirijo a login
        header('location:login.php');
    }
}
