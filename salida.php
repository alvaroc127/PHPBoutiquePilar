<?php
                session_start();
                unset($_SESSION["user"]);
                unset($_SESSION["pass"]);
                unset($_SESSION["logeado"]);            
                unset($_SESSION["mar"]);
                session_destroy();
                header("location:index.html");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

