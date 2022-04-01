<?php
    require_once("../../conexion/conexion.php");

    class usuario extends conexion {

        public function __construct()
        {
            $this->db=parent::__construct();    
        }

        public function login($email, $password){
            $tabla = $this->db->prepare("SELECT email, password FROM usuario
             WHERE email = :email AND password = :password");
             $tabla->bindparam(':email', $email);
             $tabla->bindparam(':password', $password);
             $tabla->execute();
             //rowCount busca en la tabla una coincidencia si la encontro =1
             if ($tabla->rowCount()==1) {
                 $loginUsuario = $tabla->fetch();
                $_SESSION['email'] = $loginUsuario['email'];
                echo "Inicio de sesion satisfactorio";
             }else {
                echo "Fallo al iniciar sesion, verifique sus datos";
             }
    
        }//end login
        public function insertarusuario($nombre, $email, $password){

            $tabla = $this->db->prepare(" INSERT INTO usuario(nombre, email, password)
             VALUE (:nombre, :email, :password)");  
            $tabla->bindParam(':nombre', $nombre);
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            

            if ($tabla->execute()){
                echo "Registro de usuario satisfactorio";
                header('refresh:3; url=../vista/add.php');
            }else {
                echo "Fallo al insertar registro";
                header('refresh:2; url=../../INDEX.PHP');
            }

        }
            
    }//end class
?>