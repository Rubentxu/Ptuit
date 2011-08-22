$(document).ready(function(){
    
    
    $("#botonTxt").click(enviarMensaje); 
    $('.favorito').live('click',gestionFavoritos);
    $('.verMens').live('click', verMens);        
    $('.reptuit').live('click',gestionReptuit);
    $('.borrarMens').live('click',gestionBorrarMens);
    $('.responde').live('click',gestionRespuesta);
    $("ul.menu li").click(gestionMenu);    
    $(".txtMen").keyup(function(){       
        $('.contador').text(': '+$(this).attr("value").length+' :');
    });
    $(".txtMen2").live('keyup',function(){       
        $('.contador2').text(': '+$(this).attr("value").length+' :');
    }); 
    
    $.timer(30000, function(){
        
        }); 
    
    $('#alert').bind('click',alertas);
    $('#alert').trigger('click');
       
   
    
})
function alertas(){
    var alertas = $(this);
    if((alertas.text()).trim().length>0)
    {
        alertas.animate({
            height: alertas.css('line-height') || '50px'
        }, 800,function () {
            alertas.delay(2500).animate({
                height: '0'
            }, 1200);
        });
    }    
}

function gestionMenu(evento)
{
    evento.preventDefault();
    $(".capa_contenido").addClass("txtMenCargando");
    $("ul.menu li a").removeClass("active");        
    var ruta = $(this).find("a").addClass("active").attr("href");
    $.ajax({
        url:ruta,
        cache: false,            
        type: "GET",
        dataType: "html", 
        success:gestionTabs,
        timeout: 4000,
        error: problemasEnvio

    });
}
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
                            $('#alert').html(datos[0]); 
                            $('#alert').trigger('click');
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
                    cache: false,
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
        cache: false,
        context: $(this),        
        type: "GET",
        dataType: "json",       
        success:respuestaFavoritos,
        timeout: 4000,
        error: problemasEnvio

    });
    
}
function respuestaFavoritos (datos){    
    $(this).attr('href', datos.ruta);
    var html='<img src="'+datos.imagen+'"> '+datos.texto+'</img>';        
    $(this).html(html);   
}

function gestionReptuit(evento){
    
    evento.preventDefault();
    var ruta=$(this).attr("href");  
    
    $.ajax({
        url:ruta,
        cache: false,        
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



function verMens(evento){   
    
    evento.preventDefault();
    var ruta=$(this).attr("href");  
    
    $.ajax({
        url:ruta,
        type: "GET",
        dataType: "html",        
        beforeSend: inicioVerMens,
        success:llegadaDatosVerMens,        
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
        $('#alert').html(datos[0]);
        $('#alert').trigger('click');
    }       
    $(".txtMen").removeClass("txtMenCargando");
    $(".txtMen2").removeClass("txtMenCargando");
}
function problemasEnvio(objeto, quepaso, otroobj){
    alert("Hubo un fallo en el envio AJAX... Pasó lo siguiente: "+quepaso+" "+objeto+" "+otroobj);

}
jQuery.timer = function (interval, callback) { 
    var interval = interval || 100;
    if (!callback)
        return false;	
    _timer = function (interval, callback) {
        this.stop = function () {
            clearInterval(self.id);
        };		
        this.internalCallback = function () {
            callback(self);
        };		
        this.reset = function (val) {
            if (self.id)
                clearInterval(self.id);
			
            var val = val || 100;
            this.id = setInterval(this.internalCallback, val);
        };		
        this.interval = interval;
        this.id = setInterval(this.internalCallback, this.interval);
		
        var self = this;
    };	
    return new _timer(interval, callback);
};