<?php

require 'config.php';

class ModeloUsers{
    //Mostrar usuarios
    static public function MdlShowUsers($table,$item,$valor){
        $stmt = conexion::conectar()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();

        return $stmt -> fetch();
    }
}

?>