<?php
include_once ("inc/Controlador/ControladorPersona.php");
if(!isset($_SESSION["user"])||!isset($_SESSION["mar"])||!isset($_SESSION["logeado"])){
    session_regenerate_id(true);
    die("esta intentando acceder a un sitio restringido <a href=\"index.html\">Salir!</a>.");
}

if(isset($_POST["nombreReg"])){
    
    
    
    
}else{
    echo "se resive vasio";
    
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<script src="js/ScriptCreatPerson.js"></script>
<form id="idform" action="<?php $_SERVER["PHP_SELF"]?>" method="post" onsubmit="return validFormCret()">
     <header>
                <h3 class="text-center">Datos Basicos</h3>
                <p class="text-center text-muted">proporcione susdatos basicos</p>
     </header>
    
    <p class="text-center  badge-light">Indique el tipo de Persona</p> 
    <div class="form-check-inline clrad">
            <label class="form-check-label" for="radNatural">
            <input class="form-check-input" type="radio" name="typpers" id="radNatural" value="Natural" checked>
            Natural
            </label>
        <label class="form-check-label" for="radJuridica">
            <input class="form-check-input" type="radio" name="typpers" id="radJuridica" value="Juridica">
        Juridica
        </label>
    </div>
    
    
    <section class="form-row">
        <article class="form-group col-md-4">
            <label for="emailRegistro"> Email</label>
            <input type="email" class="form-control form-control-sm" id="emailRegistro" name="emailReg" placeholder="email" required>
        </article>
        <article class="form-group col-md-4">
            <label for="nombreRegis">Nombre</label>
            <input type="text" class="form-control form-control-sm" id="nombreRegis" name="nombreReg" placeholder="nombre" required>
        </article>
        <article id="crfechp" class="form-group col-md-4">
            <label for="emailRegistro">Fecha Nacimiento</label>
            <input type="date" class="form-control form-control-sm" id="fechaNacRegis" name="fechaNacReg">
        </article>
   </section>
    <p class="text-center  badge-light">Datos de Contacto</p> 
    <section class="form-row">
        <article class="form-group col-md-4">
            <label for="intel">
                Tel&eacute;fono
                <input  class="form-control form-control-sm" type="number" name="telofo"  id="intel" required step="0" min="100000000" >
            </label>
        </article>
        <article class="form-group col-md-4">
            <label for="listbarrio">
                Barrio
            </label>
            <select class="form-control form-control-sm" id="listbarrio" required>
                <!-- llamada a php para imprimir las opcines como barrios.-->
                <option value="Nieves">Nieves</option>
                <option value="Galerias">Galerias</option>
                <option value="Santamarta">Santamarta</option>
                <option value="QuintaParedes">QuintaParedes</option>
                <option value="Otro">Otro</option>
            </select>
            <label for="crebarrio" >
                Nombre Barrio
                <input class="form-control form-control-sm" type="text" pattern="[A-Za-z]" name="nomBarrio" id="crebarrio" placeholder="Ej:Nives">
            </label>
        </article>
        <article class="form-group col-md-4">
            <label for="listciudad">
                Ciudad
            </label>
            <select class="form-control form-control-sm" id="listciudad" required>
                <!-- llamada a php para imprimir las opcines como barrios.-->
                <option value="Bogota">Bogota</option>
                <option value="Bucaramanga">Bucaramanga</option>
                <option value="Santamarta">Santamarta</option>
                <option value="Medellin">Medellin</option>
                <option value="Otro">Otro</option>
            </select>
            <label for="creciudad" >
                Nombre Ciudad
                <input class="form-control form-control-sm" type="text" pattern="[A-Za-z]" name="nomCiudad" id="creciudad" placeholder="Ej:Bogota D.C">
            </label>
        </article> 
    </section>
     <p class="text-center  badge-light">Seleccione el Rol</p> 
     <section class="form-row">
         <article class="form-group offset-4 col-md-4">
         <article class="form-check form-check-inline">
             <label for="rolempleado">
                 <input type="radio" name="rolper" value="Empleado" id="rolempleado" checked>
                 Empleado
             </label>
         </article>
         <article class="form-check form-check-inline">
             <label for="rolproveedor">
                 <input type="radio" name="rolper" value="Proveedor" id="rolproveedor">
                 Proveedor
             </label>
         </article>
         <article class="form-check form-check-inline">
             <label for="rolcliente">
                 <input type="radio" name="rolper"  value="Cliente" id="rolcliente">
                 Cliente
             </label>
         </article>
         </article>
     </section>
     <section class="form-row clsrol">
         <article id="crefirscol" class="form-group  col-md-4">
             <label for="comision">
                 <input type="number" id="empcomi" class="form-control form-control-sm" placeholder="(0,1), 0,2..(1),(2).." max="3" min="0.1" step="0.1">
                 Comisi&oacute;n
             </label>
         </article>
         <article id="creseconcol" class="form-group  col-md-4">
             <label for="creatid">
                 cedula
             </label>
             <input type="password" id="creatid" class="form-control form-control-sm" placeholder="*****" required>
             <label for="creatidconf">
              confirmar cedula
             </label>
             <input type="password" id="creatidconf" class="form-control form-control-sm" placeholder="*****" required>
        </article>
         <article id="crethreecol" class="form-group  col-md-4">
            <article class="form-check form-check-inline">
                <label class="form-check-label" for="raddebito">
                    Debito
                    </label>
                    <input type="radio" class="form-control form-check-input" name="tipopro" id="raddebito" value="Debito">
            </article>
             <article class="form-check form-check-inline">
                 <label class="form-check-label" for="radcredito">
                    Credito
                </label>
                 <input type="radio" class="form-control form-check-input" name="tipopro" id="radcredito" value="Credito">
           </article>
        </article>
     </section>
     <button type="submit" class="btn btn-primary" >Registrar</button>
</form>