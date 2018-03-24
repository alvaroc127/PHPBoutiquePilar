<?php
// aqui se creara la funcion que muestra mostraran todas las imagen linkeadas al producto.
include_once ("inc/Controlador/ControladorCatalogo.php");
function loadGet(ControladorCatalogo $cont){
    if(isset($_GET["catref"])){
         $cont->getCatObj($_GET["catref"],$_GET["refsub"]);
    }else{
        echo " <a href=\"index.html\">inicio</a>"; 
    }
}

function print_Galer(ControladorCatalogo $con){
    $imgarr=$con->arrPro();
    if(count($imgarr)>1){
    for($i=0;$i<count($imgarr);$i++){
        echo "<tr>";
        for($j=0;$j<4;$j++){
            echo "<td>" ;
            printPro($imgarr[$i]);
            echo "</td>";
        }
        echo"</tr>";
    }
    }else{
        echo "<tr>";
        echo "<td>" ;
        printPro($imgarr[0]);
        echo "</td>";
        echo"</tr>";
    }
    
}


function printPro(Producto $pro){
    $pro->setCostUni(0);
    $pro->setPrecioVenta(0);
    echo "<a  data-imgi=\"".$pro->getImage()."\" href=\"ProductoSeleccion.html?var1=2&proname=".$pro->getNamePro()."&proref=".$pro->getRefere()."&promat=".$pro->getMater()."&protalla=".$pro->getMeasure()."\"> <img  src=\".".$pro->getImage()."\" alt=\"".$pro->getNamePro()."\" > </a>";
    
}


?>
<script src="js/ScriptBodySeleccio.js">  </script>
<div id="principalBody">
    <h2 id="title_1"> </h2>
    <section id="conteTabPro">
        <table id="ProduCatalogs" class="table-hover">
            <?php
            $cont=new ControladorCatalogo();
            loadGet($cont);
            print_Galer($cont);
            ?>

            </table>
     </section>
</div>