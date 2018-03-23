<?php
 include_once ("inc/CatalogoTab.php");
 include_once ("inc/Catalogo.php");
 
 
 
 
 class ControladorCatalogo{
     
     private $catalogo =NULL;
     private $catalogTab =NULL;
     private $arragCataTab =NULL;
     private $arrayCAT =NULL;
     
     
     public function __construc(){
         
     }
     
     public function __destruct() {
         
     }
  
     function getArrayCAT() {
         return $this->arrayCAT;
     }

     function setArrayCAT(array $arrayCAT) {
         $this->arrayCAT = $arrayCAT;
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
     
     public function setCatalog(Catalogo $catalog){
         $this->catalogo=$catalog;
     }
     
     public function setCatalog_1($nombre,$fecha,$refC){
          if($this->catalogo != NULL){
              $this->catalogo=NULL;
              $this->catalogo=new Catalogo();
              $this->catalogo->setDatePublic($fecha);
              $this->catalogo->setname($nombre);
              $this->catalogo->setNumRef($refC);
          }else{
              $this->catalogo=new Catalogo();
              $this->catalogo->setDatePublic($fecha);
              $this->catalogo->setname($nombre);
              $this->catalogo->setDatePublic($refC);
          }
     }
     
     
         
         
     public function  divCat(){
         $tam=sizeof($this->arragCataTab);
         for ($i=0; $i<$tam;$i++){
             $cata=new Catalogo();
             $cata->setname($this->arragCataTab[$i]["nombrecate"]);
             $cata->setNumRef($this->arragCataTab[$i]["id_categoria"]);
             if(strcmp($this->arragCataTab[$i]["id_subcategoria"],"SUB1")!=0){
                 $cata->setSubcat(array());
                 $cata->addSubcat($this->arragCataTab[$i]["nombresubcat"],$this->arragCataTab[$i]["id_subcategoria"]);
                 $cata=$this->obtenerSubcat($i, $cata);
                }else{
                    $cata->setProducts(array());
                    $cata->addProdu($this->arragCataTab[$i]["nombreprod"],$this->arragCataTab[$i]["id_producto"]);
                    //crear los productos no completos completos cuando se llamen con el click en este momento
                }
                $this->arrayCAT[]=$cata;
              }
              $this->arragCataTab=NULL;
     }
     
     public function obtenerSubcat($i, Catalogo $cat){
         for($j=$i+1;$j<sizeof($this->arragCataTab);$j++){
         if(strcmp($this->arragCataTab[$i]["id_categoria"],$this->arragCataTab[$j]["id_categoria"])==0){
         $cat->addSubcat($this->arragCataTab[$j]["nombresubcat"],$this->arragCataTab[$j]["id_subcategoria"]);
         unset($this->arragCataTab[$j]);
          }
         }
         return $cat;
     }
     
     public function getCat(){
         $cat=new CatalogoTab();
         $this->arragCataTab=$cat->SQLconsultCat();
     }
     
    public function getCatObj($id_cat,$id_sub){
        $cat=new CatalogoTab();
        $this->catalogo=$cat->SQLExpsi($id_cat, $id_sub);
    }
    
    public function arrPro(){
        return $this->catalogo->getProducts();
    }
    
    
 
     
     
     
     
     
 }
 
 
 
 
 
 
 
 /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 ?>

