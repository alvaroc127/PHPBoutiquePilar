<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Pantalon extends PrendaAbs{
    
    
    private  $poket;
    private $pretina;
    private $descaderado;
    
    

    public function __construct() {
        parent::__construct();        
    }
    
    
    public function setPoket($poket){
        $this->poket=$poket;
    }
    public function setPretine($pretina){
        $this->pretina=$pretina;
    }
    
    public function setDescaderado($descaderado){
        $this->descaderado=$descaderado;
    }
    
    public function getPoket(){
        return $this->poket;
        
    }
    public function getPretina(){
        return $this->pretina;
    }


    public function  getDescaderado(){
        return $this->descaderado;
    }

    
    public function calcular() {
        
    }    
    
    
}

?>