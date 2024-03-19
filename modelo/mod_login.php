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
        $this->con->CreateConnection();
        $sql="select * from Usuario u join Persona p on p.idPersona=u.Persona_idPersona where nick='$this->usuario' and pass='$this->pass'";
        $resp=$this->con->ExecuteQuery($sql);
        if($row=mysqli_fetch_assoc($resp)){
            $_SESSION['nick']=$row['nick'];
            $_SESSION['pass']=$row['pass'];
            $_SESSION['idUsuario']=$row['idUsuario'];
            $_SESSION['nombre']=$row['nombre'];
            $this->con->SetFreeResult($resp);
            $this->con->CloseConnection();
            header("Location: ../vista/dashboard.php");


        }else{
            $_SESSION['error']=1;
            $_SESSION['mensaje']="Error de credenciales";
            header("Location: ../vista/page-login.php");
        }
    }

}