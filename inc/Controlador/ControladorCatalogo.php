<?php
 include_once ("inc/CatalogoTab.php");
 include_once ("inc/Catalogo.php");
 
 
 
 
 class ControladorCatalogo{
     
     private $catalogo;
     private $catalogTab;
     private $arragCataTab;
     
     
     
     public function __construc(){
         
         
         
     }
     
     public function __destruct() {
         
     }
     
     
     public function getCatalogo(){
         return $this->catalogo;
     }
     
     public function getCataLogTab(){
         return $this->catalogTab;
     }
     
     public function getArragCataTab(){
         return $this->arragCataTab;
     }
     
     public function setCatalog($catalog){
         $this->catalog=$catalog;
     }
     
     
     public function getCat(){
         $cat=new CatalogoTab();
         $this->arragCataTab=$cat->SQLconsultCat();
         return $this->arragCataTab;
     }
     
     
 }
 
 
 
 
 
 
 
 /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 ?>

