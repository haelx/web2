<?php
include_once "../modelo/conexion/conexionBase.php";
$data=json_decode(file_get_contents
    ("php://input")
    ,true);

if ($data){
    if (isset($data['nombre']) && isset($data['edad'])){
        $nombre=$data['nombre'];
        $edad=$data['edad'];
        if($edad>=18){
            echo json_encode(array("mensaje"=>"Bienvenido $nombre eres mayor de edad"));
        }else{
            echo json_encode(array("mensaje"=>"Bienvenido $nombre no eres mayor de edad"));
        }
    }else{
        echo json_encode(array("mensaje"=>"falta nombre o edad"));
    }
}else{
    echo json_encode(array("mensaje"=>"No se envio datos"));
}

