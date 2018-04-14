<?php
if(!isset($_SESSION["user"])||!isset($_SESSION["mar"])||!isset($_SESSION["logeado"])){
    session_regenerate_id(true);
    die("esta intentando acceder a un sitio restringido <a href=\"index.html\">Salir!</a>.");
}
include_once ("inc/Controlador/ControladorUsuario.php");
$contU=new ControladorUsuario();
$contU->setUser($_SESSION["user"], $_SESSION["pass"]);
function loadFunction(){//abrir el directorio donde estan las images y comenzar a recorrerlas de las images
    //traer las direcciones y la presentacion queda acargo de Bosttrap html ycss
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



?>

<script src="js/ScriptPanelControl.js"> </script>
<section id="PanelControl">
    <div class="row">
        <div class="col-md-8"> <h2 id="nombrePan" class="text-left">Panel de Control</h2>   
            </div>
        <div class="col-md-2  colPri"> 
            <p><a href="salida.php">salir</a></p><!-- aqui va el usuario-->
        </div>
            <div class="col-md-2  colPri">   
                <p><?php echo $contU->getemail()?></p><!-- aqui va el usuario-->
            </div>
    </div>
        <div class="row">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="row">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="row">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div>
            <div></div>
        </div>
</section>