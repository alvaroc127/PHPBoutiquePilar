<?php
require_once ("inc/config.php"); 

class conecxionBD{
    
    private $var;
   
    
    
   
    function conectarBD(){
        $mysql=new mysqli(Config::$config["db"]["host"], Config::$config["db"]["userName"],Config::$config["db"]["pass"],Config::$config["db"]["database"], Config::$config["db"]["port"]);
        if(!$mysql->connect_errno){
           // echo 'todo quedo listo conceccion base dedatos'."<br>";
        }else{
            echo 'No se pudo conectar'.!$mysql->connect_error,"<br>";
        }
        return $mysql;
    }
    
    function offDB(mysqli $mysql){
        $mysql->close();
    }
    
    
    
    
    
    
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

