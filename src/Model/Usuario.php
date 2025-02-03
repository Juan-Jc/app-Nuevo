<?php

namespace App\Model;

class Usuario
{
    private string $nombre;
    private string $apellido1;
    private string $apellido2;
    private string $email;
    private int $telefono;
    private string $pwd;

    public function __construct(string $name, string $ape1, string $ape2, string $email, int $tlf, string $pwd)
    {
        $this->nombre = $name;
        $this->apellido1 = $ape1;
        $this->apellido2 = $ape2;
        $this->email = $email;
        $this->telefono = $tlf;
        $this->pwd = $pwd;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getApellido1(): string
    {
        return $this->apellido1;
    }
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }
    public function getApellido2(): string
    {
        return $this->apellido2;
    }
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
    }



    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getTelefono(): int
    {
        return $this->telefono;
    }


    public function setTelefono(int $telefono): self
    {
        $this->telefono = $telefono;
        return $this;
    }


    public function getPwd(): string
    {
        return $this->pwd;
    }


    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;
        return $this;
    }
}
