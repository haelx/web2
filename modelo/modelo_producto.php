<?php
require_once "conexion/conexionBase.php";

class Producto
{
    private $nombre_pro;
    private $precio_uni;
    private $descripcion;
    private $con;

    function __construct()
    {
        $this->nombre_pro = "";
        $this->precio_uni = 0.0;
        $this->descripcion = "";
        $this->con = new conexionBase();
    }

    function asignar($nombre, $valor)
    {
        $this->$nombre = $valor;
    }

    function validar()
    {
        $sql="select * from producto where nombre_pro='$this->nombre_pro'";
        $this->con->CreateConnection();
        $resp=$this->con->ExecuteQuery($sql);
        $aux=$this->con->GetCountAffectedRows($resp);
        if($aux>0){
            $_SESSION['error']=1;
            $_SESSION['mensaje']="Producto ya registrado.";
            header("Location: ../vista/productos.html");
        }else{
            $this->registrarProducto();
        }
    }

    function registrarProducto()
    {
        $this->con->CreateConnection();
        $sql = "insert into producto(nombre_pro,precio_uni,descripcion)
        values ('$this->nombre_pro','$this->precio_uni','$this->descripcion')";
        $resp = $this->con->ExecuteQuery($sql);
        header("Location: ../vista/dashboard.php");
    }


}