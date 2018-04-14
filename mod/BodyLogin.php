<?php
include_once ("inc/Controlador/ControladorUsuario.php");
if(!isset($_SESSION["logeado"])){
    if(isset($_POST["namepass"])&&$_SESSION["mar"]==true){
        $cont=new ControladorUsuario();
        $cont->consultUsua($_POST["namepass"],$_POST["nameemail"]);
        if($cont->isUser()&& isset($_SESSION["mar"])){
            $_SESSION["mar"]=true;
            $_SESSION["logeado"]=true;
            $_SESSION["user"]=$cont->getemail();
            $_SESSION["pass"]=$cont->getPass();
            session_regenerate_id(true);
            header("location:PanelControl.html");
        }
    }else{
       if($_SESSION["mar"]!=true){
            session_regenerate_id(true);
            $_SESSION["mar"]=true;
       }
        //echo "<a href=\"Login.html?var1=4\">Login</a>";
    }
}else{
    header("location:PanelControl.html");
}


?>



<section id="formIngreo">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']."?var1=4"?>" >
    <div class="form-group">
    <label  for="emailLog">Ingrese su Email</label>
        <input  type="email" class="form-control" id="emailLog" placeholder="email@dir.co" required 
            pattern="[A-Za-z] (?@|([0-9]?@))"
            title="esto es para ayduar"
            aria-describedby="emailHelpLog"
            name="nameemail"
            >
    <small id="emailHelpLog" class="form-text"> ingresa el email registrado </small>
    </div>
        <div class="form-group"> 
            <label for="passworLog">Ingrese la contrseña</label>
            <input type="password" class="form-control" id="passworLog" placeholder="******" required=""
                   name="namepass"
                   >
        </div>
        <button type="submit" class="btn btn-primary">registrarse</button>
    </form>
</section>