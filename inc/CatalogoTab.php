<?php

require_once ("inc/ConecxionBD.php");
require_once ("inc/Catalogo.php");


class CatalogoTab{
    
    
    const SQLCONSCAT="SELECT * FROM nombCat;";
    const SQLCONSCATESP="SELECT * FROM cat_pro_sub where id_categoria=$1 and id_subcategoria=$2;"; /* consulta reservada para un catalogo (subcate o categoria en especial)*/
    private $arrayConsu;
    
    
    public function __construct() {
        
    }
    
    public function __destruct() {
        
        
    }
            
    function SQLconsultCat(){
         $conec = new conecxionBD();
         $conector=$conec->conectarBD();
         $resul=pg_query(self::SQLCONSCAT);
         $this->arrayConsu= pg_fetch_all($resul);
         $conec->offDB($conector);
         return $this->arrayConsu;
    }
    
    
    
    
    
    function SQLExpsi($key,$key2){
        $conec=new conecxionBD();
        $conector=$conec->conectarBD();
        $result=pg_query_params($conector,self::SQLCONSCATESP,array($key,$key2));
        //$result=pg_query(self::SQLCONSCATESP.$key."';");
        $this->arrayConsu= pg_fetch_all($result);
        $cat=new Catalogo();
        $cat->setNumRef($key);
        $cat->setSubcat(array());
        if(empty($this->arrayConsu)==FALSE){
        $cat->addSubcat($this->arrayConsu[0]["nombresubcat"],$key2);
        $cat->addSubcat($this->arrayConsu[0]["nombrecate"],$key2);
        for($i=0;$i<sizeof($this->arrayConsu);$i++){
            $prodduc=SingletonFactoryProducto::createProduc($this->arrayConsu[$i]["id_producto"],$this->arrayConsu[$i]["nombreprod"]);
            $prodduc->setMater($this->arrayConsu[$i]["material"]);
            $prodduc->setPrecioVenta($this->arrayConsu[$i]["precioventa"]);
            $prodduc->setMeasure($this->arrayConsu[$i]["medida"]);
            $prodduc->setCostUni($this->arrayConsu[$i]["costounitario"]);
            $prodduc->setImage($this->arrayConsu[$i]["imagen"]);
            $cat->addProdu1($prodduc);
        }
        }
        $conec->offDB($conector);
        return $cat;
    }
    
    
    
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

