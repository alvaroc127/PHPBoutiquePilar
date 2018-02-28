<?php
abstract class PrendaAbs implements InterfazProducto{

    //arreglo de colores
    private $color;
    //imagen del producto 
    private $image;
    //arreglo de materiales
    private $mater;
    //arrray of reference's
    private $refere;
    //tallaRopa
    private $clothSize;
    
    
    public function __construct() {
      
    } 


    
    function getColor() {
        return $this->color;
    }

    function getImage() {
        return $this->image;
    }

    function getMater() {
        return $this->mater;
    }

    function getRefere() {
        return $this->refere;
    }

    function getClothSize() {
        return $this->clothSize;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setMater($mater) {
        $this->mater = $mater;
    }

    function setRefere($refere) {
        $this->refere = $refere;
    }

    function setClothSize($clothSize) {
        $this->clothSize = $clothSize;
    }

        
    
    //method of calc
    public abstract function calcular();	
    //method of CalProduct
    public function CalcularProduto() {
        
    }

}





?>