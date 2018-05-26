<?php
include_once ("inc/Usuario.php");
include_once ("inc/UsuarioTab.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ControladorUsuario{
    
    private $usuTab;
    private $usuario;
    
    
    public function __construct() {
       $this->usuTab=new UsuarioTab();
    }
    
    public function consultUsua($pass,$email){
        $this->usuTab->SQL_consultusu($email, $pass);
        $this->usuario=$this->usuTab->getUsuario();
    }
    
    public function  getemail(){
        return $this->usuario->getEmail();
    }
    
    
    public function getPass(){
        return $this->usuario->getEmail();
    }
    
    
    public function setUser($email,$pass){
        if(isset($this->usuario)){
       $this->usuario->setEmail($email);
       $this->usuario->setPass($pass);
        }else{
            $this->usuario=new Usuario();
            $this->usuario->setEmail($email);
            $this->usuario->setPass($pass);
        }
    }
    
    public function getUser(){
        return $this->usuario;
    }
    public function isUser(){
        if(!is_null($this->usuario)){
            return TRUE;
        }else{
            return FALSE;
        }
        
    }
    
    
    
}



?>
