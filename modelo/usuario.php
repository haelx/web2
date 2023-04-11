<?php
require "conexion/conexionBase.php";

class Usuario
{
    private $nick;
    private $pass;
    private $activo;
    private $con;

    function __construct()
    {
        $this->nick = "";
        $this->pass = "";
        $this->activo = 1;
        $this->con = new conexionBase();
    }
    function asignar($nom, $valor)
    {
        $this->$nom = $valor;
    }

}