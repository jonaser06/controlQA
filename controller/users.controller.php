<?php

class ControllerUsers{
    /**
     * logueo de usuarios
     */
    static public function CtrlLogin(){

        if(isset($_POST["inUser"])){
            if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["inUser"]) &&
                preg_match('/^[a-zA-Z0-9]+$/',$_POST["inPass"])){
                    
                    $table = "users";
                    $item = "username";
                    $valor = $_POST["inUser"];
                    $respuesta = ModeloUsers::MdlShowUsers($table,$item,$valor);
                    
                    if($respuesta['username'] == $_POST["inUser"] && $respuesta['password'] == $_POST["inPass"] ){

                        $_SESSION["login"] = "ok";

                        $update = ModeloUsers::online($respuesta['username']);
                        
                        echo '<script>
                            window.location="home";
                        </script>';

                    }else{
                        echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentar</div>';
                    }
            }
        }

    }
    /**
     * mostrar usuarios
     */
    static public function GetUser(){
        $respuesta = ModeloUsers::MostrarUsuarios();
        echo json_encode($respuesta);
    }
}


?>