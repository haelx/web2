<?php
require "conexion/conexionBase.php";

class Persona
{
    private $nombre;
    private $papellido;
    private $sapellido;
    private $celular;
    private $direccion;
    private $fechanac;
    private $usuario;
    private $clave;
    private $con;

    function __construct()
    {
        $this->nombre = "";
        $this->papellido = "";
        $this->sapellido = "";
        $this->celular=0;
        $this->direccion="";
        $this->fechanac="";
        $this->usuario = "";
        $this->clave = "";
        $this->con = new conexionBase();
    }
    function asignar($nom, $valor)
    {
        $this->$nom = $valor;
    }


//valida si el usuario existe
    function validar()
    {
        $this->con->CreateConnection();
        $sql="select * from personas where usuario='$this->usuario'";
        $resp=$this->con->ExecuteQuery($sql);
        $re= $this->con->GetCountAffectedRows($resp);
        if($re>0){
            echo json_encode(array('Error' => 'Si','Detalles'=>"El usuario existe"));
        }else{
            $this->registrarPersona();
        }

    }
    //registrar a la persona
    function registrarPersona()
    {

        $this->con->CreateConnection();
        $clave = md5($this->clave);
        $sql = "insert into personas (nombres,papellido,sapellido,usuario,clave) values('$this->nombre','$this->papellido','$this->sapellido','$this->usuario','$clave')";
        $resp = $this->con->ExecuteQuery($sql);
        if ($resp) {
            echo json_encode(array('Error' => 'No','Mensaje'=>'Usuario Creado correctamente'));
            echo "<a href='../index.php'>Regresar</a>";
        } else {
       
        }
    }
    //funcion para mostrar datos de la base de datos
    function mostrar(){
        $this->con->CreateConnection();
        $sql="select * from personas";
        $resp=$this->con->ExecuteQuery($sql);
        $re= $this->con->GetCountAffectedRows($resp);
        if($re>0){
            while($row=$this->con->GetRows($resp)){
                echo $row[1];
                echo "<br>";
            }
        }
    }
}
