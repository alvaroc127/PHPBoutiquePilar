<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SingletonFactoryProducto{
    
      protected static $produc=NULL;
    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    public function __construct(){
        
        
    }

    public function __destruct() {
        
    }
    
   
    public static function  createProduc($typeClass){
        switch ($typeClass){
             case strcmp($typeClass, "Zapato")==0:
                return new Zapato();
            break;
        
            case strcmp($typeClass,"FlorDeco")==0:
                return new FlorDeco();
            break;
        
             default:
                 if(!empty($typeClass)){
                     return SingletonFactoryPrendad::createPrend($typeClass);
                 }
                 
                 break;
            
        }
    }

    public static function getInstance($typeClass){
    if(SingletonFactoryProducto::$produc==NULL){
        switch ($typeClass){
            
            case strcmp($typeClass, "Zapato")==0:
                SingletonFactoryProducto::$produc=new Zapato();
            break;
        
        
            case strcmp($typeClass,"FlorDeco")==0:
                SingletonFactoryProducto::$produc=new FlorDeco();
                
            break;
            
             default:
                 if(!empty($typeClass)){
                     SingletonFactoryProducto::$produc= SingletonFactoryPrendad::getInstance($typeClass);
                 }
                 break;
        }
        }else{
            return SingletonFactoryProducto::$produc;
        }
    }
    
    
    
}



?>