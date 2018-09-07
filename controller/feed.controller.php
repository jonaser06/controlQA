<?php

class CntrlFeed{

    static public function feednews($url){
        $estado;
        $robottxt = file_get_contents("$url/feed/news");
        $buscar = "<?xml";
        $resul = strpos($robottxt, $buscar);
        if($resul!== false){
            $estado= true;
        }else{
            $estado= false;
        }
        return $estado;
    }

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

    static public function sitemaps($url){
        $estado;
        $robottxt = file_get_contents("$url/sitemap.xml");
        $buscar = "sitemap";
        $resul = strpos($robottxt, $buscar);
        if($resul!== false){
            $estado= true;
        }else{
            $estado= false;
        }
        return $estado;
    }

    static public function feed($url){
        $estado;
        $robottxt = file_get_contents("$url/feed");
        $buscar = "<?xml";
        $resul = strpos($robottxt, $buscar);
        if($resul!== false){
            $estado= true;
        }else{
            $estado= false;
        }
        return $estado;
    }

    static public function instantrss($url){
        $estado;
        $robottxt = file_get_contents("$url/instantrss/actualidad.xml");
        $buscar = "<?xml";
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