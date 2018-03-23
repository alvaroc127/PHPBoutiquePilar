<?php
include_once ("inc/InterfazProducto.php");
class Producto implements InterfazProducto{

    
    
    //name of products
    private $namePro;
    //precioVenta 
    private $precioVenta;
    //arreglo de materiales
    private $mater;
    // reference's
    private $refere;
    //tallaRopa
    private $measure;
    //costo unitario
    private $costUni;
    //string con la dir de img
    private $image;
    
    
    public function __construct() {
      
    } 


    


    function getMater() {
        return $this->mater;
    }

    function getRefere() {
        return $this->refere;
    }

    function getNamePro() {
        return $this->namePro;
    }

    function getPrecioVenta() {
        return $this->precioVenta;
    }

    function getMeasure() {
        return $this->measure;
    }

    function setNamePro($namePro) {
        $this->namePro = $namePro;
    }

    function setPrecioVenta($precioVenta) {
        $this->precioVenta = $precioVenta;
    }

    function setMeasure($measure) {
        $this->measure = $measure;
    }

    function setMater($mater) {
        $this->mater = $mater;
    }

    function setRefere($refere) {
        $this->refere = $refere;
    }

   
    function getCostUni() {
        return $this->costUni;
    }

    function getImage() {
        return $this->image;
    }

    function setCostUni($costUni) {
        $this->costUni = $costUni;
    }

    function setImage($image) {
        $this->image = $image;
    }

            
    
    //method of calc
    public  function calcular(){
        
        
    }	
    //method of CalProduct
    public function CalcularProduto() {
        
    }

}





?>