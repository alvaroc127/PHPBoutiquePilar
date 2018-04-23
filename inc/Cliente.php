<?php
include_once ("inc/Persona.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Cliente extends Persona{
    
    private $frecuen;
    

    function __construct() {
        
    }

    
    function getFrecuen() {
        return $this->frecuen;
    }

    function setFrecuen($frecuen) {
        $this->frecuen = $frecuen;
    }

            
    public function calDeberes($deberes) {
        
    }

}
?>