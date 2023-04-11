<?php
class Rol
{
    private $nombre;
    private $con;

    function __construct()
    {
        $this->nombre = "";
        $this->con = new conexionBase();
    }
    function asignar($nom, $valor)
    {
        $this->$nom = $valor;
    }
    
}