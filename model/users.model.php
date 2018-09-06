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
    /*
    //estado online
    static public function online($user){
        $tabla = 'users';
        $valor = 'state';
        $stmt = conexion::conectar()->prepare("UPDATE $tabla SET $valor = '1' WHERE users.username = '$user'");
        $stmt -> execute();
    }
    //estado offline
    static public function offline($user){
        $tabla = 'users';
        $valor = 'state';
        $stmt = conexion::conectar()->prepare("UPDATE $tabla SET $valor = '0'");
        $stmt -> execute();
    }
    //mostrar usuarios
    static public function MostrarUsuarios(){
        $table = 'users';
        $valor = 'state';
        $nombre = 'name';
        $stmt = conexion::conectar()->prepare("SELECT $nombre FROM $table WHERE $valor = '1'");
        $stmt -> execute();
        return $stmt -> fetch();
    }
    */
}

?>