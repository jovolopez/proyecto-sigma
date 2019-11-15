<?php

class Usuario {
  private $nombre;
  private $apellido;
  private $email;
  private $dni;
  private $password;

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getApellido()
  {
    return $this->apellido;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getDni()
  {
    return $this->dni;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setNombre(string $nombre)
  {
    $this->nombre = $nombre;
  }

  public function setApellido(string $apellido)
  {
    $this->apellido = $apellido;
  }

  public function setEmail(string $email)
  {
    $this->email = $email;
  }

  public function setDNI(string $dni)
  {
    $this->dni = $dni;
  }

  public function setPassword(string $password)
  {
    $this->password = password_hash($password);
  }
}
