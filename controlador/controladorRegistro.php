<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    die();
}
$data = json_decode(file_get_contents("php://input"), true);
print_r($data);
// include "../modelo/Persona.php";
// $per=new Persona();

// $nombre=htmlspecialchars($_POST["nombre"]);
// $papellido=htmlspecialchars($_POST["papellido"]);
// $sapellido=htmlspecialchars($_POST["sapellido"]);
// $usuario=htmlspecialchars($_POST["usuario"]);
// $pass1=htmlspecialchars($_POST["pass1"]);
// $pass2=htmlspecialchars($_POST["pass2"]);
// if($pass1!=$pass2){
//     header("location: ../registro.php");
// }else{
//     $per->asignar("nombre",$nombre);
//     $per->asignar("papellido",$papellido);
//     $per->asignar("sapellido",$sapellido);
//     $per->asignar("usuario",$usuario);
//     $per->asignar("clave",$pass1);
//     $per->validar();
// }

