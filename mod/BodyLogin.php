<?php
include_once ("inc/Controlador/ControladorUsuario.php");

    if(isset($_POST["namepass"])){
        $cont=new ControladorUsuario();
        $cont->consultUsua($_POST["namepass"],$_POST["nameemail"]);
        if($cont->isUser()){
            header("refresh:5;url=PanelControl.html");
        }
    }else{
        //echo "<a href=\"Login.html?var1=4\">Login</a>";
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