<?php
//print_r($_POST);
require_once "../modelo/Mod_Persona.php";
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
}if($_POST['celular'] && isset($_POST)){
    $celular=htmlspecialchars($_POST['celular']);
}else{
    $celular=0;
}if($_POST['direccion'] && isset($_POST)){
    $direccion=htmlspecialchars($_POST['direccion']);
}else{
    $direccion="";
}if($_POST['fechanac'] && isset($_POST)){
    $fechanac=htmlspecialchars($_POST['fechanac']);
}else{
    $fechanac="";
}
//Accionar el modelo y asignar mis atributos
$Persona=new Persona();
$Persona->asignar("nombre",$nombre);
$Persona->asignar("papellido",$papellido);
$Persona->asignar("sapellido",$sapellido);
$Persona->asignar("celular",$celular);
$Persona->asignar("direccion",$direccion);
$Persona->asignar("fechanac",$fechanac);
$Persona->validar();
