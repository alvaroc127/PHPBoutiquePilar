<?php

include_once ("inc/Persona.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Proveedor extends Persona{
    
    private $tipofP;
    private $valCuota;
    
    
    function __construct() {
        
    }

    
    function getTipofP() {
        return $this->tipofP;
    }

    function getValCuota() {
        return $this->valCuota;
    }

    function setTipofP($tipofP) {
        $this->tipofP = $tipofP;
    }

    function setValCuota($valCuota) {
        $this->valCuota = $valCuota;
    }

        
    public function calDeberes($deberes) {
        
    }

}




?>