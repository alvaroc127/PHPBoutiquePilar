<?php
require_once ("inc/config.php"); 

class conecxionBD{
    
    private $var;
   
    
    
   
    function conectarBD(){
        $conString="host=". Config::$config["db"]["host"].' '."port=".Config::$config["db"]["port"].' '."dbname=".Config::$config["db"]["database"].' '."user=".Config::$config["db"]["userName"].' '."password=".Config::$config["db"]["pass"];
        var_dump($conString);
        $conector = pg_connect($conString);
        if($conector){
            echo 'todo quedo listo conceccion base dedatos'."<br>";
        }else{
            echo 'No se pudo conectar'.pg_last_error(),"<br>";
        }
        return $conector;
    }
    
    function offDB($conector){
        pg_close($conector);
    }
    
    
    
    
    
    
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

