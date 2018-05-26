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
