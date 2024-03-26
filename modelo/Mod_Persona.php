<?php
require_once "conexion/conexionBase.php";
class Persona
{
    private $nombre;
    private $papellido;
    private $sapellido;
    private $carnet;
    private $email;
    private $con;

    function __construct()
    {
        $this->nombre = "";
        $this->papellido = "";
        $this->sapellido = "";
        $this->carnet = 0;
        $this->email = "";
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
            session_start();
            $_SESSION['error']=1;
            $_SESSION['mensaje']="La persona ya se encuentra registrada";
            header("Location: ../vista");
            exit();
        }else{
            $this->registrarPersona();
        }
    }

    function registrarPersona()
    {
        $this->con->CreateConnection();
        $sql = "insert into persona(nombre,papellido,sapellido,carnet,email) values ('$this->nombre','$this->papellido','$this->sapellido','$this->carnet','$this->email')";
        $resp = $this->con->ExecuteQuery($sql);
        header("Location: ../vista");
        exit();
    }
}
?>