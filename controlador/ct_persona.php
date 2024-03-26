<?php
//print_r($_POST);
require_once "../modelo/mod_Persona.php";
if ($_POST['nombre'] && isset($_POST)) {
    $nombre = htmlspecialchars($_POST['nombre']);
} else {
    echo "falta nombre";}
if ($_POST['papellido'] && isset($_POST)) {
    $papellido = htmlspecialchars($_POST['papellido']);
}else{
    echo "Falta primer apellido";
}if($_POST['sapellido'] && isset($_POST)){
    $sapellido=htmlspecialchars($_POST['sapellido']);
}else{
    $sapellido="";
}if($_POST['carnet'] && isset($_POST)){
    $carnet=htmlspecialchars($_POST['carnet']);
}else{
    $carnet=0;
}if($_POST['email'] && isset($_POST)){
    $email=htmlspecialchars($_POST['email']);
}else{
    $email="";
}
//Accionar el modelo y asignar mis atributos
$Persona=new Persona();
$Persona->asignar("nombre",$nombre);
$Persona->asignar("papellido",$papellido);
$Persona->asignar("sapellido",$sapellido);
$Persona->asignar("carnet",$carnet);
$Persona->asignar("email",$email);
$Persona->registrarPersona();