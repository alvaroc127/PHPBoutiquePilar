<?php

require_once ("inc/ConecxionBD.php");


class CatalogoTab{
    
    
    const SQLCONSCAT="SELECT * FROM \"Catalogo\";";
    const SQLCONSCATESP="SELECT * FROM Catalogo WHERE id='";
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
    
    function SQLExpsi($key){
        $conec=new conecxionBD();
        $conec->conectarBD();
        pg_query(self::SQLCONSCATESP.$key."';");
        $this->arrayConsu= pg_fetch_all($result);
        $conec->offDB($conector);
        return $this->arrayConsu;
    }
    
    
    
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

