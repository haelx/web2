<?php
//print_r($_POST);
require_once "../modelo/Modelo_Almacen.php";

// Verificar si se han enviado datos por POST
if ($_POST) {
    // Verificar y obtener los datos enviados
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : null;
    $cant_max = isset($_POST['cant_max']) ? (int)$_POST['cant_max'] : 0;
    $id_sucursal = isset($_POST['id_sucursal']) ? (int)$_POST['id_sucursal'] : 0;

    // Verificar si se proporciono un nombre
    if (!$nombre) {
        echo "Falta el nombre del almacen";
        exit; // Detener la ejecucion si falta el nombre
    }

    // Accionar el modelo y asignar los atributos
    $almacen = new Almacen();
    $almacen->asignar("nombre", $nombre);
    $almacen->asignar("cant_max", $cant_max);
    $almacen->asignar("id_sucursal", $id_sucursal);
    $almacen->validar();
} else {
    echo "No se han proporcionado datos por POST";
}

?>