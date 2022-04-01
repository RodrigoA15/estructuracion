<?php
require_once("../modelo/usuario.php");

if (isset($_REQUEST["btn_enviar"])==1) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $modeloUsuario = new usuario();
    $insertarUsuario=$modeloUsuario->insertarusuario($nombre, $email, $password);

    //if (isset($modeloUsuario)==1) {
        //header permite ir a otro archivo
   // header('location: ../vista/login.php');
   // }else {
        //header('location: ../../INDEX.PHP');
    //}

}




?>