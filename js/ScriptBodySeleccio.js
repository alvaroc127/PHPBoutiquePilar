/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function (){ //esto solo funciona a body seleccion si es un producto debe ser redireccionado a otro php
var nom=localStorage.getItem("nomSub");
 $("#title_1").html(nom);
});


