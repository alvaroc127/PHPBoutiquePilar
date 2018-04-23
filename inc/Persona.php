<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
abstract class   Persona {
    
    private $nombre_RazSoc;
    private $cedula;
    private $email;
    private $dateBirthday;
    private $tipo;
    private $tel;
    
    
    
    public function __construct() {
        
    }
    
    
    function getNombre_RazSoc() {
        return $this->nombre_RazSoc;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getEmail() {
        return $this->email;
    }

    function getDateBirthday() {
        return $this->dateBirthday;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getTel() {
        return $this->tel;
    }

    function setNombre_RazSoc($nombre_RazSoc) {
        $this->nombre_RazSoc = $nombre_RazSoc;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDateBirthday($dateBirthday) {
        $this->dateBirthday = $dateBirthday;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }
    
     abstract function calDeberes($deberes);





}





?>
