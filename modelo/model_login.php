<?php
require_once "conexion/conexionBase.php";

class Login
{
    private $username;
    private $password;
    private $con;

    function __construct()
    {
        $this->username = "";
        $this->password = "";
        //Conexion con la base de datos
        $this->con = new conexionBase();
    }

    function asignar($nombre, $valor)
    {
        $this->$nombre = $valor;
    }

    function validar()
    {
        $this->con->CreateConnection();
        $sql="select * from usuario where username='$this->username' and pass='$this->password'";
        //$sql="select * from Usuario u join Persona p on p.idPersona=u.Persona_idPersona where nick='$this->usuario' and pass='$this->password'";
        $resp=$this->con->ExecuteQuery($sql);
        if($row=mysqli_fetch_assoc($resp)){
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
            $_SESSION['id_persona']=$row['id_persona'];
           $_SESSION['nombre']=$row['nombre'];
            $this->con->SetFreeResult($resp);
            $this->con->CloseConnection();
            header("Location: ../vista/dashboard.php");


        }else{
            $_SESSION['error']=1;
            $_SESSION['mensaje']="Error de credenciales";
           header("Location: ../vista/login_calani.php");
        }
    }

}