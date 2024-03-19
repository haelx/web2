<?php
require_once "conexion/conexionBase.php";

class Login
{
    private $usuario;
    private $pass;
    private $con;

    function __construct()
    {
        $this->usuario = "";
        $this->pass = "";
        $this->con = new conexionBase();
    }

    function asignar($nombre, $valor)
    {
        $this->$nombre = $valor;
    }

    function validar()
    {
        echo $this->usuario. "  ------    ". $this->pass;
    }

}