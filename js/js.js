$(document).ready(function() {

    'use strict';

    // Solo para Index
    let local = window.location.href;
    const index = /index/gi;
    if(index.test(local)){

        // //Oscurecer demas heroes
        $(function(){
            $("button").click(function(){
                $('button').not(this).fadeTo("slow", 0.15, "swing");
            });
            // Quitar borde al hacer focus a boton de bootstrap
            $('button.btn').focus(function(){
                $('button.btn').css("box-shadow","none");
            });
        });

        // Superior a 1400px
        if($("body").width() >= 1400){
        
            // Aumentar imagen al dar click en a
            $('.img-prota').click(function(){
                $(this).css({"transform": "scale(1.1)"});
                $('img').not(this).fadeTo("fast",0.50,"swing");//Desaparece en un tiempo determinado
            });

            // Cambiar de color al pasar puntero por a
            $('.img-prota').on({
                click:function(){
                    $(".letras").css({"color":"#dd0a0f", "transition": "0.6s ease-in-out all"});
                },
                mouseenter:function(){
                    $(".letras").css({"color":"white", "transition": "0.6s ease-in-out all"});
                },
                mouseleave:function(){
                    $(".letras").css({"color":"#212529", "transition": "0.6s ease-in-out all"});
                }
            });
        } 
    }else{

        // Paginas internas

            // Aparece informacion segun que se de click
            $(".navegacion, .nombre").click(function(){
                let pag = this.getAttribute("href");
                $(pag).css("display","block");
                $(".seccion, .el").not(pag).css("display","none");
            });
            
            // Inferior a 992px
            if($("body").width() <= 992){

                // Aparece y desaparece menu
                $('#mini-menu').click(function(){
                    if($(".navegacion").css("display") == "none"){
                        $('.navegacion').fadeIn(1000).css("display","block");
                    } else {
                        $('.navegacion').fadeOut(1000).css("display","none");
                    }
                });
                
                // Desaparece menu al click .navegacion
                $('.navegacion').click(function(){
                    $('.navegacion').fadeOut(1000).css("display","none");
                });

                 // Desaparece menu navegacion en scroll down y aparece en scroll up
                 var lastScrollTop = 0;
                 $(window).scroll(function(event){
                 var st = $(this).scrollTop();
                 if (st > lastScrollTop){
                    $("header").css({"position":"static"});
                 } else {
                    $("header").css({"position":"sticky","top":"0","width":"100%"}).fadeIn();
                 }
                 lastScrollTop = st;
                 });
               
            } else {

                // Remover #mini-menu
                $("#mini-menu").remove();

                // Desaparece menu navegacion en scroll down y aparece en scroll up
                var lastScrollTop = 0;
                $(window).scroll(function(event){
                var st = $(this).scrollTop();
                if (st > lastScrollTop){
                    $(".flotar").fadeOut();
                } else{
                    $(".flotar").fadeIn();
                }
                lastScrollTop = st;
                });
        
                // Aparece menu navegacion al pasar puntero sobre menu fijo
                $('.fijar').on({
                    mouseenter:function(){
                        $(".flotar").fadeIn();
                    }
                });

                // Cambiar de color segun categoria seleccionada
                $("#nombre").addClass("seleccionado");//
                $(".cambiante").addClass("sinSe").click(function (e){
                    e.preventDefault();
                    $(this).addClass("seleccionado").removeClass("sinSe");
                    $(".cambiante").not(this).removeClass("seleccionado").addClass("sinSe");


                });
                

               

            }

    }
});