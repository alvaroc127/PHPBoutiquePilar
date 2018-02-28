<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario implements EstrategiaGestion{
    
    private $name;
    private $nameeUsu;
    private $pass;
    private $estrategia;
    
    public function __construct() {
        
    }
    
    public function __destruct() {
        
        
    }
    
    
    function getEstrategia() {
        return $this->estrategia;
    }

    function setEstrategia($estrategia) {
        $this->estrategia = $estrategia;
    }

        public function setname($name){
        $this->name=$name;
    }
    
    public function setnameUsu($nameUsu){
        $this->nameeUsu=$nameUsu;
    }
    
    public function setPass($pass){
        $this->pass=$pass;
    }

    public function gestionCatalogo() {
        
    }

    public function gestionProducto() {
        
    }

}




?>