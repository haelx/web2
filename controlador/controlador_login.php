<?php
include_once "../modelo/model_login.php";
if ($_POST) {
    if (isset($_POST["username"]) and $_POST["username"]) {
        $username=htmlspecialchars($_POST["username"]);
    }
    if (isset($_POST["password"]) and $_POST["password"]) {
        $password=htmlspecialchars($_POST["password"]);
    }
    $login=new Login();
    $login->asignar("username",$username);
    $login->asignar("password",$password);
    $login->validar();
}else{
    echo "no hay post";
}