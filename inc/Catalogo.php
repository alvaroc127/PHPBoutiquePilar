<?php


class Catalogo {
    
    //date of public cat type date
    private $datePublic;
    //name of cat type string
    private $name;
    //array of products 
    private $produts;
    
    public function __construct() {
        
    }
    
    public function __destruct() {
        
    }
    
    public function setDatePublic($datePublic){
        $this->datePublic=$datePublic;
    }
    
    public function setProduct($products){
        $this->produts=$products;
    }
    
    public function setname($name){
        $this->name=$name;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getProdu(){
        return $this->produts;
    }
    
    public function getDatepublic(){
        return $this->datePublic;
    }
    
    public function managerDate(){
        
        
        
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



?>