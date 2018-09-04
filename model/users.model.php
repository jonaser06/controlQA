<?php

require 'config.php';

class ModeloUsers{
    //validar usuarios
    static public function MdlShowUsers($table,$item,$valor){
        $stmt = conexion::conectar()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();

        return $stmt -> fetch();

        $stmt -> close();
        $stmt = null;
    }
    //
    static public function online($user){
        $stmt = conexion::conectar()->prepare("UPDATE users SET state = '0' WHERE users.username = $user");
    }
    //mostrar usuarios
    static public function MostrarUsuarios(){
        $table = 'users';
        $stmt = conexion::conectar()->prepare("SELECT * FROM $table");
        $stmt -> execute();
        return $stmt -> fetchAll();
    }

}

?>