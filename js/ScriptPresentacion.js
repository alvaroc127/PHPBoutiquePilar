/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function (){
    $(".classsubc > li").on('click',function () {
        var nom=$("a",this).html();
        localStorage.setItem("nomSub",nom);
    }); 
    
    
   
    $(".classSelectPr").on('click',function (){ // llamado directo a la vista del producto
        var refP=$(".classSelectPr").data("refp");
        var nomPr=$(".classSelectPr").html();
        localStorage.setItem("refp",String(refP));
        localStorage.setItem("nompr",String(nomPr));
       $(".classSelectPr").attr("href","ProductosCatalogo.html?var1=2&refp="+refP); 
    });
});
    

