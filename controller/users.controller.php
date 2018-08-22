<?php

class ControllerUsers{

    public function CtrlLogin(){

        if(isset($_POST["inUser"])){
            if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["inUser"]) &&
                preg_match('/^[a-zA-Z0-9]+$/',$_POST["inPass"])){
                    
                    $table = "usuarios";
                    $item = "usuario";
                    $valor = $_POST["inUser"];
                    $respuesta = ModeloUsers::MdlShowUsers($table,$item,$valor);

            }
        }

    }
}


?>