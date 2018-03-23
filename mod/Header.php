<?php
include_once ("inc/Controlador/ControladorCatalogo.php");

function checkVar(){
  if(isset($_GET["var1"])){
 $ind=$_GET["var1"];
 switch ($ind){
     case 1:
         echo "<link rel=\"stylesheet\" href=\"css/BodySelecciionCSS.css\">\n";
         break;
     case 2:
         echo "<link rel=\"stylesheet\" href=\"css/BodySeleccionProduCSS.css\">\n";
         
         break;
     
     case 3:
         
         break;
 }
 }else{
     echo "<link rel=\"stylesheet\" href=\"css/BodyPrincipal.css\">";
 }
}


 
 function inPrint(Catalogo $c){
     if(empty($c->getName())==false){
        echo "<li class=\"classListC\" >".$c->getName();
         if(empty($c->getSubCat())==false){
             echo "<ul class=\"classsubc\">\n";
             foreach ($c->getSubCat() as $val){
                echo "<li><a id=\"".$val["ref"]."\"  data-catref=\"".$c->getNumRef()."\" data-subref=\"".$val["ref"]."\" href=\"ProductosCatalogo.html?var1=1&refsub=".$val["ref"]."&catref=".$c->getNumRef()."\" >".$val["nombSubcat"]."</a></li>\n";
             }
             echo "</ul>\n";
         }else{
             if(empty($c->getProducts())==false){
                echo "<ul>\n";
                foreach ($c->getProducts() as $prod){
                    print_toProd($prod,$c);
                }
                echo "</ul>\n";
             }
         }
         echo "</li>\n";
     }
     
 }
 // crear los productos despues de selecionar la subcategoria llamandolos del join de la vista con la tabla productos.
 
 function print_toProd(Producto $p, Catalogo $c){
     //adicionar el parametro para solo producto.
    echo "<li><a  class=\"classSelectPr\"  data-catref=\"".$c->getNumRef()."\" data-refp=\"".$p->getRefere()."\" href=\"ProductosCatalogo.html?var1=1\">".$p->getNamePro()."</a></li>\n";
 }
 //enviar por parametros la referencia del producto para buscarlo
 
 function print_toCatg(array $catArr){
     foreach ($catArr as $c){
         inPrint($c);
         }
 }
 
 
 


?>
<html>
<head>
    <title>
     index
    </title>
  <meta charset="UTF-8"/>
 <meta name="author" content="Pilar Romero, Moda"/>
 <meta name="keywords" content="moda ropa ejecutiva dama mujer"/>
 <meta name="subject" content="ropa femenina"/>
 <meta name ="description" content="sitio web de la marca pilar romero"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <link rel="stylesheet" href="css/HeaderStyleCSS.css">
  <script src="js/JQuery3.1.js"></script>
  <script  src="bootstrap/js/bootstrap.js"></script>
  <script src="js/ScriptPresentacion.js"></script>
 
 <?php
 checkVar();
 ?>
 <link rel="stylesheet" href="css/FooterStyleCSS.css">
 <?php
 $cont=new ControladorCatalogo();
 $cont->getCat();
 $cont->divCat();
 ?>
</head>
<body>
 <div class="container">
	<header id="cabezera">
		<h1 align="center">Pilar Romero</h1>
	</header>
	<nav id="navbar">
		<ul>
		<li><a href="ProductosCatalogo.html">cont&aacute;tenos</a></li>
		<li><a  id="desplieg" href="Prueba2.html">Catalogo</a>
                    <dl id="submen">
                        <dt> seleccion&eacute; el catalogo</dt>
                        <ul>
                            <?php
                             print_toCatg($cont->getArrayCAT());
                            ?>
                        </ul>
                    </dl>
                    </li>
                <!--
                llamada a php para traer los catalogos de la base de datos
                se traen los catalogos de la base de datos
                -->
		<li><a href="Prueba2.html">¿Quines Somos?</a></li>
		</ul>
</nav>



