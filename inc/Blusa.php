<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Blusa extends PrendaAbs{
    
    //varible tipo boolean
    private $bordado;
    //varible tipo boolean
    private $estampado;
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function __destruct() {
        
    }

    public function getBordado(){
        return $this->bordado;
    }
    
    public function  getEstampado(){
        return $this->estampado;
    }
    
    public function setBordado($bordado){
        $this->bordado=$bordado;
    }
    public function setEstampado($estampado){
        $this->estampado=$estampado;
    }

        public function calcular(){
        
    }
    public function CalcularProduto() {
        //parent::CalcularProduto();
    }
}

?>