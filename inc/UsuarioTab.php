<?php
include_once("inc/ConecxionBD.php");
include_once("inc/Usuario.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class UsuarioTab{
    
    const SQL_CONSULT="select email,id_persona from persona where email=? and id_persona=?;";
    private $usuario;
    private $arrUsu;
    
    
    public function __construct() {
         $usuario=new Usuario();
        
    }
    
    
    function SQL_consultusu($email,$key){
        $cont=new conecxionBD();
        $mysql=$cont->conectarBD();
        $result=$mysql->prepare(self::SQL_CONSULT);
        if(!$result){
            echo $mysql->errno."error en".$mysql->error;
        }else{
            $result->bind_param('ss',$email,$key);
            if($result->execute()){
                $usu=new Usuario();
                $this->arrUsu=$result->get_result()->fetch_all(MYSQLI_ASSOC);
                $usu->setPass($this->arrUsu[0]["id_persona"]);
                $usu->setEmail($this->arrUsu[0]["email"]);
                $this->usuario=$usu;
            }else{
                echo $result->errno."error en".$result->error;
            }
        }
    }
    
    
    
    
    public  function getUsuario(){
        return $this->usuario;
    }    
}



?>
