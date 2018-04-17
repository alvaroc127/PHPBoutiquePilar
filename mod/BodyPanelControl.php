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
            <p><a  class="page-link" href="salida.php">salir</a></p><!-- aqui va el usuario-->
        </div>
            <div class="col-md-2  colPri">   
                <p><?php echo $contU->getemail()?></p><!-- aqui va el usuario-->
            </div>
    </div>
        <div class="card-columns">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Crear Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/pen_14403.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui creara los productos que desea</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">crearProducto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
            <div class="card" id="PCcard2">
                <div class="card-header">
                    <h4 class="card-title">Modificar Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/upload_arrow_14448.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui Modificara sus productos</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">Modificar Producto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscar Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/binoculars_Buscar.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui buscara sus productos</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">Buscar Producto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
        </div>
       
        <div class="card-columns">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Crear Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/pen_14403.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui creara los productos que desea</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">crearProducto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
            <div class="card" id="PCcard2">
                <div class="card-header">
                    <h4 class="card-title">Modificar Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/upload_arrow_14448.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui Modificara sus productos</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">Modificar Producto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscar Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/binoculars_Buscar.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui buscara sus productos</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">Buscar Producto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
        </div>
        
        <div class="card-columns">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Crear Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/pen_14403.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui creara los productos que desea</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">crearProducto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
            <div class="card" id="PCcard2">
                <div class="card-header">
                    <h4 class="card-title">Modificar Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/upload_arrow_14448.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui Modificara sus productos</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">Modificar Producto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscar Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/binoculars_Buscar.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui buscara sus productos</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">Buscar Producto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
        </div>
    
        <div class="card-columns">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Crear Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/pen_14403.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui creara los productos que desea</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">crearProducto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
            <div class="card" id="PCcard2">
                <div class="card-header">
                    <h4 class="card-title">Modificar Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/upload_arrow_14448.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui Modificara sus productos</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">Modificar Producto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buscar Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/binoculars_Buscar.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui buscara sus productos</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">Buscar Producto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
        </div>
    
        <div class="card-columns">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Crear Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/pen_14403.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui creara los productos que desea</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">crearProducto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
            <div class="card" id="PCcard2">
                <div class="card-header">
                    <h4 class="card-title">Modificar Producto</h4>
                    <figure>
                        <img class="card-img-top img-fluid w-50" src="./img/upload_arrow_14448.png" alt="un ejemplo">
                    </figure>
                </div>
                <div class="card-body">
                    <p class="card-text">Aqui Modificara sus productos</p>
                </div>
                <footer class="card-footer text-muted">
                    <!--un boton y otras cositas.-->
                    <a href="" class="btn btn-primary">Modificar Producto</a>
                    <p class="card-text"><small class="text-muted">peque textp</small></p>
                </footer>
            </div>
            
        </div>
    
</section>