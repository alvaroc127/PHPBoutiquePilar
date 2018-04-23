<?php
include_once ("inc/Persona.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empleado
 *
 * @author felipe
 */
class Empleado extends Persona {
    //put your code here
    private $comision;
    private $idEmpleado;
    
    function __construct() {
        
    }

    function getComision() {
        return $this->comision;
    }

    function getIdEmpleado() {
        return $this->idEmpleado;
    }

    function setComision($comision) {
        $this->comision = $comision;
    }

    function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }
    
    
    public function calDeberes($deberes) {
        
    }

}
