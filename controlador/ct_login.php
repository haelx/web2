<?php
include_once "../modelo/mod_login.php";
$data=json_decode(file_get_contents
    ("php://input")
    ,true);
if ($data) {
    if (isset($data["usuario"]) and $data["usuario"]) {
        $usuario=htmlspecialchars($data["usuario"]);
    }
    if (isset($data["pass"]) and $data["pass"]) {
        $pass=htmlspecialchars($data["pass"]);
    }
    $login=new Login();
    $login->asignar("usuario",$usuario);
    $login->asignar("pass",$pass);
    $login->validar();
}else{
    echo "no hay post";
}
