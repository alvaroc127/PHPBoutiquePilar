<?php
if(!isset($_SESSION["user"])||!isset($_SESSION["mar"])||!isset($_SESSION["logeado"])){
    session_regenerate_id(true);
    die("esta intentando acceder a un sitio restringido <a href=\"index.html\">Salir!</a>.");
}
$useEmp = $_SESSION["usempl"];


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div>
    
    <form id="formid2" method="post" action="<?php $_SERVER["PHP_SELF"]?>" onsubmit="return" >
        <header>
            <h3> Formulario Crear Producto </h3>
            <p class="text-center text-muted">proporcione las caracteristicas del producto</p>
        </header>
        <section class="form-group row">
            <label for="idmeterial" class="col-sm-2 col-form-label">materiales</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="idmaterial" required placeholder="separe por  ',' ">
            </div>
        </section>
        <section class="form-group row">
            <label for="idrefe" class="col-sm-2 col-form-label">Referencia</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="RF00XX" required>
            </div>
        </section>
        <section class="form-group row">
            <label for="idrefe" class="col-sm-2 col-form-label">Categoria</label>
            <select class="col-sm-10 custom-select" id="idTipoSel" required>
                <option values="">Categoria1</option> <!-- llamado php-->
                <option values="">Categoria2</option>
                <option values="">Categoria3</option>
                <option values="">Categoria4</option>
                <option values="">Categoria5</option>
            </select>
        </section>
        <section class="form-group row">    
        <label for="inputimg" class="col-sm-2" >seleccione un archivo</label>
        <input type="file"  class="border border-secondary col-sm-10">
        </section>
        <section class="form-group row">    
        <label for="idtexare" class="col-sm-2" >Detalles</label>
        <textarea id="idtexare" form="formid2" class="col-sm-10 form-control"></textarea>
        </section>
        <button type="submit" class="btn btn-primary">Enviar Producto</button>
    </form>
</div>
