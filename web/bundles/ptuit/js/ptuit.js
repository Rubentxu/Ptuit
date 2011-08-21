$(document).ready(function(){
    
    $(".txtMen").cuentaCaracteres();
    $("#botonTxt").click(enviarMensaje);
    $("#btnRegistrar").click(registrar);
    $('.verMens').live('click', verMens);   
    $('#alert').alertas();
    $('.favorito').live('click',gestionFavoritos);
    $('.reptuit').live('click',gestionReptuit);
    $('.borrarMens').live('click',gestionBorrarMens);
    $('.responde').live('click',gestionRespuesta);
    $("ul.menu li").click(function(evento)
    {
        evento.preventDefault();
        $(".capa_contenido").addClass("txtMenCargando");
        $("ul.menu li a").removeClass("active");        
        var ruta = $(this).find("a").addClass("active").attr("href");
        $.ajax({
            url:ruta,
            async: true,
            type: "get",
            dataType: "html",       
            success:gestionTabs,
            timeout: 4000,
            error: problemasEnvio

        });
    });

    
})
function gestionTabs(datos){
    $(".capa_contenido").removeClass("txtMenCargando");
    $(".capa_contenido").fadeOut(1200,function(){
        $(this).html(datos).fadeIn(1000);
        
    });
    
}
function gestionRespuesta(evento){
    evento.preventDefault();
    var ruta=$(this).attr("href");
    
    $(".txtMen").addClass("txtMenCargando");

    $.ajax({
        url:ruta,
        async: true,
        type: "POST",
        dataType: "html",       
        success:enviarForm,
        timeout: 4000,
        error: problemasEnvio

    });
}
function enviarForm(datos){
    $(".txtMen").removeClass("txtMenCargando");
    var $dialog = $('#dialog')
    .html(datos)
    .dialog({
        title: 'Responder a Ptuit',
        height: 300,
        width: 620,
        modal: true,
        closeOnEscape: false,
        hide: 'clip',            
        buttons: {
            "Responder": function() {
                var texto=$(".txtMen").attr("value");
                var url=$("#formMens").attr('action');
                var token=$("#form__token").attr('value');
                $(".txtMen").val("");
                $('.contador').text('');  
                var texto=$(".txtMen2").attr("value");
                var url=$("#formMens2").attr('action');
                var token=$("#form__token").attr('value');
                var id=$("#idPadre").attr('value');
                $(".txtMen2").val("");
                $('.contador2').text('');
                $.ajax({
                    url:url,
                    context: $(this),
                    async: true,
                    type: "POST",
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded",
                    data:"texto="+texto+"&Mensaje[_token]="+token+"&idPadre="+id,
                    beforeSend: function(){
                        $(".txtMen2").addClass("txtMenCargando");
                    },    
                    success:function(datos){
                        
                        $(".txtMen2").removeClass("txtMenCargando");
                        $( this ).dialog( "close" );
                       
                        if(datos.texto){  
                            var ptuit='<li> <div class="avatar"><a href="#"><img src="'+datos.avatar+'"alt="avatar"/></a></div>'+
                            '<div class="tweetTxt"><strong class="respuesta"><a href="#">Respuesta a @'+datos.nickPadre+'</a>:</strong>'+ 
                            '<div class="clear"></div><strong><a href="#">@'+datos.nick+'</a>: </strong><p>'+
                            datos.texto+'</p><div class="date">'+datos.creado+'<span class="ExtMens">'+
                            '<a class="favorito" href="'+datos.ruta_favorito+'"><img src="'+datos.imgfavorito+
                            '"/> Favorito</a>'+        
                            '<a class="borrarMens" href="'+datos.ruta_borrar+'"><img src="'+datos.imgpapelera+'" /> Borrar</a>'+
                            '<a class="responde" href="'+datos.rutaResponder+'"><img src="'+datos.imgresponder+'" /> Responder</a></span>'+
                            '<div class="flotarDer"><a class="verMens" href="'+datos.ruta_ver+'">ver</a></div>'+
                            '</div></div><div class="clear"></div></li>';
            
                            $('ul.statuses li:first-child').before(ptuit);
                            $("ul.statuses:empty").append(ptuit);
                            $('#lastTweet').html($('#inputField').val());
                            $('#inputField').val('');
                        }else{
                            $('#alert').html(datos[0]).alertas();            
                        }                            
                        
                    },                    
                    timeout: 4000,
                    error: problemasEnvio

                });
                return false;                             
            },
            "Cancelar": function() {
                $( this ).dialog( "close" );
            }
        } 
    });
    

}

function gestionBorrarMens(evento){
    evento.preventDefault();
    var ruta=$(this).attr("href");  
    var nodo=$(this).parents("li");
    
    $( "#dialog" ).html('<p class="error">¿De verdad quieres borrar este mensaje?.</p>')
    .dialog({
        title: 'Borrar este Ptuit',
        resizable: false,
        height:180,
        width: 350,
        modal: true,
        hide: 'clip',          
        buttons: {
            "Borrar": function() {
                $( this ).dialog( "close" );
                $.ajax({
                    url:ruta,
                    context: nodo,
                    async: true,
                    type: "GET",
                    dataType: "json",       
                    success:function(datos){            
                        $(this).hide(1300,function(){
                            $(this).remove();
                        });
                    },
                    timeout: 4000,
                    error: problemasEnvio

                });
            },
            "Cancelar": function() {
                $( this ).dialog( "close" );
            }
        }
    });

    
    
    
    
}

function gestionFavoritos(evento){
    
    evento.preventDefault();
    var ruta=$(this).attr("href");  
    
    $.ajax({
        url:ruta,
        context: $(this),
        async: true,
        type: "GET",
        dataType: "json",       
        success:function(datos){
            $(this).attr('href', datos.ruta);
            var html='<img src="'+datos.imagen+'"> '+datos.texto+'</img>';        
            $(this).html(html);    
        },
        timeout: 4000,
        error: problemasEnvio

    });
    
}

function gestionReptuit(evento){
    
    evento.preventDefault();
    var ruta=$(this).attr("href");  
    
    $.ajax({
        url:ruta,
        context: $(this),
        async: true,
        type: "GET",
        dataType: "json",       
        success:function(datos){
            $(this).attr('href', datos.ruta);
            var html='<img src="'+datos.imagen+'"> '+datos.texto+'</img>';        
            $(this).html(html);    
        },
        timeout: 4000,
        error: problemasEnvio

    });
    
}


jQuery.fn.alertas= function(){
    var alertas = $(this);
    
    if(($(this).text()).trim().length>0)
    {
        var alerttimer = window.setTimeout(function () {
            alertas.trigger('click');
        }, 3000);
        alertas.animate({
            height: alertas.css('line-height') || '50px'
        }, 200)
        .click(function () {
            window.clearTimeout(alerttimer);
            alertas.animate({
                height: '0'
            }, 200);
        });
    }
	
    
}

function verMens(evento){   
    
    evento.preventDefault();
    var ruta=$(this).attr("href");  
    
    $.ajax({
        url:ruta,
        async: true,
        type: "GET",
        dataType: "html",        
        beforeSend: inicioVerMens,
        success:llegadaDatosVerMens,
        complete: completadoVerMens,
        timeout: 4000,
        error: problemasEnvio

    });
}

function inicioVerMens (datos){
    
    $(".bloqueContenido-body").addClass("txtMenCargando");   
    

}
function llegadaDatosVerMens(datos){
    $(".bloqueContenido-body").removeClass("txtMenCargando");
    $('.bloqueCabecera').hide(500,function(){    
        $('.bloqueCabecera .t').html('Ver Mensaje'); 
        $('.bloqueCabecera').show(1000);
    });
    
    $('.bloqueContenido-body').fadeOut(500,function(){    
        $('.bloqueContenido-body').html(datos); 
        $('.bloqueContenido-body').fadeIn(1000);
    });
    
    
    

}
function completadoVerMens()   {
    
}

function registrar(){

    var usuario=$("#nickR").attr("value");
    var pass=$("#passR").attr("value");
    var pass2=$("#passR2").attr("value");
    var correo=$("#correo").attr("value");
    $.ajax({
        url:"index.php",
        async: true,
        type: "POST",
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        data:"controlador=usuario&accion=crearUsuario&formulario=Registro&usuario="+usuario+"&pass="+pass+"&pass2="+pass2+"&correo="+correo,
        beforeSend: inicioRegistro,
        success:llegadaDatosRegistro,
        complete: completadoRegistro,
        timeout: 4000,
        error: problemasEnvio

    });


}
function inicioRegistro (datos){

    $("#panel2").addClass("txtMenCargando");


}
function llegadaDatosRegistro(datos){
    if(datos.validado=='FALSE'){
        var errorMensaje =$('#errorFormRegistro');
        errorMensaje.text(datos.msgError);
        errorMensaje.show('slow');

    }else {
        
        $('#panel').hide();
        $('#panel2').hide();
        $("#panel").removeClass("txtMenCargando");
        $("#pass").val("");
        $("#nick").val("");
        $("#pass2").val("");
        $("#correo").val("");
    }   


}
function completadoRegistro()   {
    $("#panel2").removeClass("txtMenCargando");
    $("#passR").val("")
    $("#nickR").val("");

}

jQuery.fn.cuentaCaracteres= function(){    
    
    $(".txtMen").keyup(function(){       
        $('.contador').text(': '+$(this).attr("value").length+' :');
    });  
    $(".txtMen2").live('keyup',function(){       
        $('.contador2').text(': '+$(this).attr("value").length+' :');
    }); 
}

function enviarMensaje(){

    var texto=$(".txtMen").attr("value");
    var url=$("#formMens").attr('action');
    var token=$("#form__token").attr('value');
    $(".txtMen").val("");
    $('.contador').text('');
    $.ajax({
        url:url,
        async: true,
        type: "POST",
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        data:"texto="+texto+"&Mensaje[_token]="+token,
        beforeSend: inicioEnvio,    
        success:llegadaDatos,
        complete: completado,
        timeout: 4000,
        error: problemasEnvio

    });


    return false;
}
function inicioEnvio (datos){
    $(".txtMen").addClass("txtMenCargando");

}
function llegadaDatos (datos){   
    
    if(datos.texto){  
        var ptuit='<li> <div class="avatar"><a href="#"><img src="'+datos.avatar+'"alt="avatar"/></a></div>'+
        '<div class="tweetTxt"><strong><a href="#">@'+datos.nick+'</a>: </strong><p>'+
        datos.texto+'</p><div class="date">'+datos.creado+'<span class="ExtMens">'+
        '<a class="favorito" href="'+datos.ruta_favorito+'"><img src="'+datos.imgfavorito+
        '"/> Favorito</a>'+        
        '<a class="borrarMens" href="'+datos.ruta_borrar+'"><img src="'+datos.imgpapelera+'" /> Borrar</a>'+
        '<a class="responde" href="'+datos.rutaResponder+'"><img src="'+datos.imgresponder+'" /> Responder</a></span>'+
        '<div class="flotarDer"><a class="verMens" href="'+datos.ruta_ver+'">ver</a></div>'+
        '</div></div><div class="clear"></div></li>';
            
        $('ul.statuses li:first-child').before(ptuit);
        $("ul.statuses:empty").append(ptuit);
        $('#lastTweet').html($('#inputField').val());
        $('#inputField').val('');
    }else{
        $('#alert').html(datos[0]).alertas();            
    }       
    $(".txtMen").removeClass("txtMenCargando");
    $(".txtMen2").removeClass("txtMenCargando");
}
function problemasEnvio(objeto, quepaso, otroobj){
    alert("Hubo un fallo en el envio AJAX... Pasó lo siguiente: "+quepaso+" "+objeto+" "+otroobj);

}
function completado(exito){
    

    if(exito=="success"){
        alert("Y con éxito");
    }

}
