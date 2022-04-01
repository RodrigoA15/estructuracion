<?php
    require_once("../modelo/usuario.php");

    if (isset($_REQUEST["btn_enviar"])==1) {
        $email = $_POST["email"];
        $password = $_POST["password"];  
        $loginusuario = new usuario();
        $loginusuario->login($email, $password);

        if (isset($loginusuario)==1) {
            //header permite ir a otro archivo
            header('location: ../vista/perfil.php');
        }else {
            header('location: ../../INDEX.PHP');
        }
    }


?>