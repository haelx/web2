<?php
//print_r($_POST);
require_once "../modelo/mod_proveedor.php";
if ($_POST['nombre_emp'] && isset($_POST)) {
    $nombre_emp = htmlspecialchars($_POST['nombre_emp']);
} else {
    echo "falta nombre";
}if($_POST['telefono'] && isset($_POST)){
    $celular=htmlspecialchars($_POST['telefono']);
}else{
    $celular=0;
}
//Accionar el modelo y asignar mis atributos
$=new proveedor();
$proveedor->asignar("nombre_emp",$nombre_emp);
$proveedor->asignar("telefono",$celular);
$proveedor->validar();