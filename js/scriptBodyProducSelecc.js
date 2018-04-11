/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    var dir=localStorage.getItem("dirimg");
    if($("#producSelecc2").attr("src")){
         
    }else{
        $("#producSelecc2").attr("src","."+dir);
    }
    localStorage.clear();
});
