<?php

include_once ("inc/Producto.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SingletonFactoryProducto{
    
      protected static $produc;
    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    public function __construct(){
        
        
    }

    public function __destruct() {
        
    }
    
   
    public static function  createProduc($nomb,$ref){
        $prod=new Producto();
        $prod->setRefere($ref);
        $prod->setNamePro($nomb);
        return $prod;
    }

    public  static  function getInstance(){
    if(SingletonFactoryProducto::$produc==NULL){
        SingletonFactoryProducto::$produc=new Producto();
        echo "se creo producto<p>";
        }else{
            SingletonFactoryProducto::$produc=NULL;
            echo "NO creo producto<p>";
        }
        return SingletonFactoryProducto::$produc;
        }


}
?>