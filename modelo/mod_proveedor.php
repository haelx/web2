<?php
require_once "conexion/conexionBase.php";

class proveedor{
    private $nombre_emp;
    private $telefono;
    private $con;

function __construct()
{
    
    $this->nombre_emp = "";
    $this->telefono = 0;
    $this->con = new conexionBase();
    
}
function asignar($nombre_emp, $valor)
    {
        $this->$nombre_emp = $valor;
    }
    function validar()
    {
        $sql="select * from persona where nombre='$this->nombre_emp'";
        $this->con->CreateConnection();
        $resp=$this->con->ExecuteQuery($sql);
        $aux=$this->con->GetCountAffectedRows($resp);
        if($aux>0){
            $_SESSION['error']=1;
            $_SESSION['mensaje']="La persona ya se encuentra registrada";
            header("Location: ../vista");
        }else{
            $this->registrarproveedor();
        }
    }
    function registrarproveedor()
    {
        $this->con->CreateConnection();
        $sql = "insert into proveedor(nombre,telefono)
values ('$this->nombre_emp','$this->telefono')";
        $resp = $this->con->ExecuteQuery($sql);
        header("Location: ../vista");
    }


}