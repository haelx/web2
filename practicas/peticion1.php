<?php
include_once "../modelo/conexion/conexionBase.php";
$data=json_decode(file_get_contents
    ("php://input")
    ,true);

if ($data){
    if (isset($data['nombre'])){
        $nombre=$data['nombre'];
    }else{
        echo json_encode(array("mensaje"=>"falta el nombre"));
    }
    if (isset($data['edad'])){
        $edad=$data['edad'];
    }else{
        echo json_encode(array("mensaje"=>"falta la edad"));
    }

    if($edad>=18){
        echo json_encode(array("mensaje"=>"Bienvenido $nombre eres mayor de edad"));
    }else{
        echo json_encode(array("mensaje"=>"Bienvenido $nombre no eres mayor de edad"));
    }
}

