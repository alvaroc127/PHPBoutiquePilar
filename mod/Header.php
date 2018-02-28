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
 <link rel="stylesheet" href="css/PruebaEstilosPrincipal.css">
 <?php
 if(isset($_GET["var1"])){
 $ind=$_GET["var1"];
 switch ($ind){
     case 1:
         echo "<link rel=\"stylesheet\" href=\"css/BodySelecciionCSS.css\"> ";
         break;
     case 2:
         echo "<link rel=\"stylesheet\" href=\"css/BodySelecciionCSS.css\">  ";
         
         break;
     
     case 3:
         
         break;
 }
 }
 ?>
 <!--
                header linkea a cabeza, pero tambien tiene footer y body
 debe linkear al footer y como saber a que body linkeo
                -->
 <?php
 include_once ("inc/Controlador/ControladorCatalogo.php");
 $cont=new ControladorCatalogo();
 $arr=$cont->getCat();
 ?>
</head>
<body>
 <div id="agrupado">
	<header id="cabezera">
		<h1 align="center">Pilar Romero</h1>
	</header>
	<nav id="navbar">
		<ul>
		<li><a href="ProductosCatalogo.html">cont&aacute;tenos</a></li>
		<li><a  id="desplieg" href="Prueba2.html">Catalogo</a>
                    <dl id="submen">
                        <dt> seleccion&eacute; el catalogo</dt>
                         <table>
                        <?php
                         foreach ($arr as $c){
                             echo "<tr>\n";
                             echo "<td><a href=\"ProductosCatalogo.html?var1=1\">".$c["nombreCatalogo"]."</a></td>\n";
                            echo "</tr>\n";
                         }
                        ?>
                    </table> 
                    </dl>
                    </li>
                <!--
                llamada a php para traer los catalogos de la base de datos
                se traen los catalogos de la base de datos
                -->
		<li><a href="Prueba2.html">¿Quines Somos?</a></li>
		</ul>
</nav>



