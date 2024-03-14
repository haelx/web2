<?php
require_once "conexion/conexionBase.php";

class Persona
{
    private $nombre;
    private $papellido;
    private $sapellido;
    private $celular;
    private $direccion;
    private $fechanac;
    private $con;

    function __construct()
    {
        $this->nombre = "";
        $this->papellido = "";
        $this->sapellido = "";
        $this->celular = 0;
        $this->direccion = "";
        $this->fechanac = "0000-00-00";
        $this->con = new conexionBase();
    }

    function asignar($nombre, $valor)
    {
        $this->$nombre = $valor;
    }

    function validar()
    {
        $sql="select * from persona where nombre='$this->nombre' and papellido='$this->papellido'";
        $this->con->CreateConnection();
        $resp=$this->con->ExecuteQuery($sql);
        $aux=$this->con->GetCountAffectedRows($resp);
        if($aux>0){
            $_SESSION['error']=1;
            $_SESSION['mensaje']="La persona ya se encuentra registrada";
            header("Location: ../vista");
        }else{
            $this->registrarPersona();
        }
    }

    function registrarPersona()
    {
        $this->con->CreateConnection();
        $sql = "insert into persona(nombre,papellido,sapellido,celular,direccion,fechanac)
values ('$this->nombre','$this->papellido','$this->sapellido','$this->celular','$this->direccion','$this->fechanac')";
        $resp = $this->con->ExecuteQuery($sql);
        header("Location: ../vista");
    }


}