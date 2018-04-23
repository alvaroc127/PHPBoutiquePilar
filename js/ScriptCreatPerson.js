/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function changeName(event){
    if($('label[for=nombreRegis]').html()==="Razón Social"){
        $('label[for=nombreRegis]').html('Nombre');
        $('#nombreRegis').attr("placeholder","Nombre");
        $('input[id=rolempleado]').show();
        $('label[for=rolempleado]').show();
        $('label[for=creatid]').html('cedula');
        $('label[for=creatidconf]').html('confirmar cedula');
        $('#empcomi').show("slow");
        $('#crfechp').show("slow");
    }else{
        if($('label[for=nombreRegis]').html()==="Nombre"){
        $('label[for=nombreRegis]').html('Raz&oacute;n Social');
        $('#nombreRegis').attr("placeholder","Razón Social");
        $('input[id=rolempleado]').hide();
        $('label[for=rolempleado]').hide();
        $('label[for=creatid]').html('NIT');
        $('label[for=creatidconf]').html('Confirmar NIT');
        $('#empcomi').hide();
        $('#crfechp').hide();
        }
    }
}

function modifiInpu(event){
    var inp =event.data.sel;
    inp.charAt(0);
    console.log(inp);
    switch(inp.charAt(0)){
        case 'E':
            $("#crefirscol").show("slow");
            $("#creseconcol").attr('class',"form-group  col-md-4");
            $('#crethreecol').hide();
        break;
        
        case 'P':
            $("#crefirscol").hide();
            $("#creseconcol").attr('class',"form-group offset-4 col-md-4");
            $('#crethreecol').show("slow") ;
        break;
        
        
        case 'C':
            $("#crefirscol").hide();
            $("#creseconcol").attr('class',"form-group offset-4 col-md-4");
            $('#crethreecol').hide();
        break;
        
        default :
            
         break;
    }
}

function validFormCret(){
    var out=true;
    var prob="";
    if($('#radNatural:checked').length > 0){
        if(!$('#fechaNacRegis').val()){
            out=false;
            prob+="Fecha Nacimiento: debe ser diligensiado\n";
        }
        if($('#rolempleado:checked').length > 0){
            if(!$('#empcomi').val()){
                out=false;
                prob+="Comision: asigne la comision al empleado\n";
            }
        }
    }else{
        $('#fechaNacRegis').val("");
        if($('#rolempleado:checked').length > 0){
           out=false; 
           prob+="Empleado: los empleados no son persona juridica\n";
        }
    }
    if(($('#rolcliente:checked').length > 0 || $('#rolproveedor:checked').length > 0)){
        $('#empcomi').val("");
        if($('#rolproveedor:checked').length > 0){
            //si esta vacio esta seleccionado validar ue no se este vacio
            if($('#radcredito:checked').length >0 || $('#raddebito:checked').length > 0){
                prob+="selecciono un proveedor";
            }else{
                out=false;
                prob+="Proveedor: Seleccione el tipo de proveedor debito o credito";
            }    
        }
    }
    
    if($('#creatid').val()===$('#creatidconf').val()&&true===out){
            prob+=" NIT o Cedula OK..\n";
        }else{
            out=false;
            $('#creatid').val("");
            $('#creatidconf').val("");
        }
        
    
    
    if(true===out){
        prob+="Fomulario OK..";
        alert(prob);
    }else{
        alert("Fallas en el formulario.."+prob);
    }
    return out;
}


$(document).ready(function () {
    $('#cssBody').attr("href","css/BodyPersonCSS.css");
    $('input[id=radJuridica]').on('click',changeName);
    $('input[id=radNatural]').on('click',changeName);
    $('label[for=crebarrio]').hide();
    $('label[for=creciudad]').hide();
    $('#crethreecol').hide();
    $('#listbarrio').change(function() {
        if($(this).val()==="Otro"){
            $('label[for=crebarrio]').show("slow");
        }else{
            $('label[for=crebarrio]').hide();
        }
    });
    $('#listciudad').change(function() {
        if($(this).val()==="Otro"){
            $('label[for=creciudad]').show("slow");
        }else{
            $('label[for=creciudad]').hide();
        }
    });
    $('input[id=rolempleado]').on('click',{ sel:$('input[id=rolempleado]').val()},modifiInpu);
    $('input[id=rolproveedor]').on('click',{ sel:$('input[id=rolproveedor]').val()},modifiInpu);
    $('input[id=rolcliente]').on('click',{ sel:$('input[id=rolcliente]').val()},modifiInpu);
    
});

