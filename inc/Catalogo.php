<?php

//represent the  category/subcateogry
include_once ("inc/SingletonFactoryProducto.php");
class Catalogo {
    
    //date of public cat type date
    private $datePublic; //fecha creacion del usuario
    //name of cat type string
    private $name;
    //key refCatlogo
    private $numRef;
    //array of psubcat
    private $subCat;
    //array of products
    private $products=NULL;
    
    public function __construct() {
        
    }
    
    public function __destruct() {
        
    }
    
    public function setDatePublic($datePublic){
        $this->datePublic=$datePublic;
    }
    
    public function setSubcat(array $subCat){
        $this->subCat=$subCat;
    }
    
    public function setname($name){
        $this->name=$name;
    }
    function getNumRef() {
        return $this->numRef;
    }

    function setNumRef($numRef) {
        $this->numRef = $numRef;
    }

        public function getName(){
        return $this->name;
    }
    
    public function getSubCat(){
        return $this->subCat;
    }
    
    public function getDatepublic(){
        return $this->datePublic;
    }
    
    public function addSubcat($subcat,$ref){
        $this->subCat[]=array( 
            "nombSubcat"=>$subcat,
            "ref"=>$ref);
    }
    
    public function  addProdu($nombrePr, $numRef){
       $prosd= SingletonFactoryProducto::createProduc($nombrePr, $numRef);
       $this->products[]=$prosd;
    }
    
    public function  addProdu1(Producto $producto){
       $this->products[]=$producto;
    }
    
   


    public function setProducts(array $produc){
        $this->products=$this->products;
    }
    
    public function getProducts(){
        return $this->products;
    }
    
    public  function managerDate(){
        
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



?>