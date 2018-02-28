<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Falda extends PrendaAbs{
    
   //var que define el alto de la falda
    private $higt;
    
    
    public function __construct(){
        parent::__construct();
    }
    
    public function __destruct() {
        
    }


    public function setAlto($alto){
        $this->higt=$alto;
    }
    
    public function getHig(){
        return $this->higt;
    }
    
   public function calcular() {
       
   }
    
    
    
    
}








?>

