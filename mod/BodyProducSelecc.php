<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ("inc/Controlador/ControladorCatalogo.php");

$prod=new Producto();
function loadProduc(){
    if(isset($_GET["proref"])){
        $pro= SingletonFactoryProducto::createProduc($_GET["proref"],$_GET["proname"]);
        $pro->setMeasure($_GET["protalla"]);
        $pro->setMater($_GET["promat"]);
    }else{
        if(isset($_GET["proref1"])){
            $cont=new ControladorCatalogo();
            $cont->getCatObj($_GET["catref"],$_GET["refsub"]);
            $arr=$cont->arrPro();
            if(!empty($arr)){
            foreach($arr as $prod){
                if(strcmp($_GET["proref1"],$prod->getRefere())==0){
                    $pro= $prod;
                    break;
                }   
             }
            }
        }
    }
    return $pro;
}
$pro=loadProduc();
?>
<script src="js/scriptBodyProducSelecc.js"> </script>
<div class="row">
    <section id="colunimg" class="col-md-6">
        <figure>
            <img id="producSelecc2" src="<?php  
            if(isset($_GET["proref1"])){
                echo $pro->getImage();
                }
            
            ?>" 
                 alt="imgennproducto" class="img-thumbnail">
            <figcaption><?php
            $pro->getNamePro();
            ?></figcaption>
        </figure>
    </section>
    <section id="colundet" class="col-md-6">
        <dl class="list-inline">
         <dt>Producto</dt>
          <dd><?php
          echo $pro->getNamePro();
          ?> </dd>  
          <dt>Referencia</dt>
          <dd><?php
          echo $pro->getRefere();
          ?></dd>
          <dt>Materiales</dt>
          <dd><?php
          echo $pro->getMater();
          ?></dd>
          <dt>Medidas o tallas</dt>
          <dd>
          <?php
          echo $pro->getMeasure();
          ?>
          </dd>
        </dl>
    </section>
</div>


