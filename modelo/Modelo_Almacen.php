<?php
require_once "conexion/conexionBase.php";

class Almacen
{
    private $id_almacen;
    private $nombre;
    private $cant_max;
    private $id_sucursal;
    private $con;

    function __construct()
    {
        $this->id_almacen = null;
        $this->nombre = "";
        $this->cant_max = 0;
        $this->id_sucursal = 0;
        $this->con = new conexionBase();
    }

    function asignar($nombre, $valor)
    {
        $this->$nombre = $valor;
    }

    function validar()
    {
        $sql = "SELECT * FROM almacen WHERE nombre='$this->nombre'";
        $this->con->CreateConnection();
        $resp = $this->con->ExecuteQuery($sql);
        $aux = $this->con->GetCountAffectedRows($resp);
        if ($aux > 0) {
            $_SESSION['error'] = 1;
            $_SESSION['mensaje'] = "El almacen ya se encuentra registrado";
            header("Location: ../vista");
        } else {
            $this->registrarAlmacen();
        }
    }

    function registrarAlmacen()
    {
        $this->con->CreateConnection();
        $sql = "INSERT INTO almacen(nombre, cant_max, id_sucursal) VALUES ('$this->nombre', $this->cant_max, $this->id_sucursal)";
        $resp = $this->con->ExecuteQuery($sql);
        header("Location: ../vista");
    }
}

?>