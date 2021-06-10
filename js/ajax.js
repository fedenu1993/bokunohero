$(document).ready(function(){

    $("button").click(function(e) {
        e.preventDefault();
        var heroeElegido = this.value
        setTimeout(function() {
            window.location="heroe.html?elegido="+heroeElegido;
        }, 1500);
       
    });

    var paramstr = window.location.search.substr(1);
    var paramarr = paramstr.split ("&");
    var params = {};
    
    for ( var i = 0; i < paramarr.length; i++) {
        var tmparr = paramarr[i].split("=");
        params[tmparr[0]] = tmparr[1];
    }
    if (params['elegido']) {
       console.log('El valor del parámetro variable es: '+params['elegido']);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
                    if(xhr.readyState == 4 && xhr.status == 200){
                        var jsonData = JSON.parse(xhr.responseText);
                        var heroesRecibidos = jsonData.listadoHeroes.heroe;        
                        // console.log(heroesRecibidos[i].nombre);
                        for (var i=0; i<heroesRecibidos.length;i++) {
                            var nombreHeroe = jsonData.listadoHeroes.heroe[i].id;
                            if (nombreHeroe==params['elegido']) {
                                document.getElementById("nombre").innerHTML = heroesRecibidos[i].nombre;
                                document.getElementById("he").innerHTML = heroesRecibidos[i].presentacion;
                                document.getElementById("personality").innerHTML = heroesRecibidos[i].personalidad;
                                document.getElementById("appearance").innerHTML = heroesRecibidos[i].apariencia;
                                document.getElementById("skill").innerHTML = heroesRecibidos[i].habilidades;
                                document.getElementById("equipment").innerHTML = heroesRecibidos[i].equipo;
                            }
                        }
                    }
                }
                xhr.open("GET","base.json?nocache=' + (new Date()).getTime()");
                xhr.send();  

    } else {
       console.log('No se envió el parámetro variable');
    }
   



});