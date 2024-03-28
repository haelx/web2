<?php
//print_r($_POST);
require_once "../modelo/modelo_producto.php";
if ($_POST['nombre_pro'] && isset($_POST)) {
    $nombre_pro = htmlspecialchars($_POST['nombre_pro']);
} else {
    echo "falta nombre del producto.";}
if ($_POST['precio_uni'] && isset($_POST)) {
    $precio_unitario = htmlspecialchars($_POST['precio_uni']);
}else{
    echo "Falta definir el precio.";
}if($_POST['descripcion'] && isset($_POST)){
    $descripcion=htmlspecialchars($_POST['descripcion']);
}else{
    $sapellido="Se requiere descripcion";
}
//Accionar el modelo y asignar mis atributos
$Persona=new Producto();
$Persona->asignar("nombre_pro",$nombre_pro);
$Persona->asignar("precio_uni",$precio_unitario);
$Persona->asignar("descripcion",$descripcion);
$Persona->validar();
