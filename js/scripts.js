$ = jQuery.noConflict();

$(document).ready(function(){

    //Ocultar y mostrar menu
    $('.mobile-menu a').on('click',function(){
        $('nav.menu-sitio').toggle('slow');
    });
    
    //Reacccionar a Resize en la pantalla
    var breakpoint = 786;
    $(window).resize(function(){
        if($(document).width() >= breakpoint){
            $('nav.menu-sitio').show();
        }else{
            $('nav.menu-sitio').hide();
        }
        
    });

});