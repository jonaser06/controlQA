<?php

class conexion{
    public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=america",
                        "root",
                        "");
        $link -> exec("set names utf8");
        return $link;
    }
}
?>