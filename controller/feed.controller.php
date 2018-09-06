<?php

class CntrlFeed{

    static public function robot($url){
        $estado;
        $robottxt = file_get_contents("$url/robots.txt");
        $buscar = "# robots.txt";
        $resul = strpos($robottxt, $buscar);
        if($resul!== false){
            $estado= true;
        }else{
            $estado= false;
        }
        return $estado;
    }

}

?>