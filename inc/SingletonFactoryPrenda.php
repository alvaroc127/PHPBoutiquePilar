<?php

class SingletonFactoryPrendad{

    //prenda de Abs
    protected static $prendAbs=NULL;
    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    public function __construct(){
        
        
    }

    public function __destruct() {
        
    }
    
   
    public static function  createPrend($typeClass){
        switch ($typeClass){
            case strcmp($typeClass, "Blusa")==0:
                return new Blusa();
            break;
        
        
            case strcmp($typeClass,"Pantalon")==0:
                return new Pantalon();
                
            break;
            
            case strcmp($typeClass,"Bata")==0;
                return new Bata();
            break;
        
            case strcmp($typeClass,"Falda")==0: 
                return new Falda();
            break;
        
            default :
                return NULL;
            break;
        }
    }

    public static function getInstance($typeClass){
    if(SingletonFactoryPrendad::$prendAbs==NULL){
        switch ($typeClass){
            
            case strcmp($typeClass, "Blusa")==0:
                SingletonFactoryPrendad::$prendAbs=new Blusa();
            break;
        
        
            case strcmp($typeClass,"Pantalon")==0:
                SingletonFactoryPrendad::$prendAbs=new Pantalon();
                
            break;
            
            case strcmp($typeClass,"Bata")==0;
                SingletonFactoryPrendad::$prendAbs=new Bata();
            break;
        
            case strcmp($typeClass,"Falda")==0: 
                SingletonFactoryPrendad::$prendAbs=new Falda();
            break;
        
            default :
            break;
        }
        }else{
            return SingletonFactoryPrendad::$prendAbs;
        }
    }

}
?>