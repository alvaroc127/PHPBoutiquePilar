<?php


include_once ("inc/EstrategiaGestion.php");
include_once ("inc/Empleado.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario implements EstrategiaGestion{
    
    
    private $pass;
    private $estrategia;
    private $email;
    private $empleado;
    
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

        
    
    public function setPass($pass){
        $this->pass=$pass;
    }
    
    public function setEmail($email){
        $this->email=$email;
    }

    
    public function getEmail(){
        return $this->email;
    }
    
    public function  getPass(){
        return $this->pass;
    }

    

    function getPerson() {
        return $this->empleado;
    }

    function loadPerson($arrUss ){
       $emp =new Empleado();
        $emp->setNombre_RazSoc($arrUss[0]["nombre_razonsocial"]);
        $emp->setDateBirthday($arrUss[0]["fechaNacimiento"]);
        $emp->setEdad($arrUss[0]["edad"]);
        $emp->setTipo($arrUss[0]["tipoPersona"]);
        $this->empleado=$emp;
    }
    
    function loadEm($arrEmp){
        $this->empleado->setComision($arrEmp[0]["comision"]);
        $this->empleado->setIdEmpleado($arrEmp[0]["id_empleado"]);
    }
    
    function setPerson($empled) {
        $this->empleado = $empled;
    }

    
    public function gestionCatalogo(){
        
    }

    public function gestionProducto() {
        
    }

}




?>