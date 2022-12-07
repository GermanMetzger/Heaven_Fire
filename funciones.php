<?php

//El proposito de este archivo es almacenar funciones que deba reutilizar muchas veces.

//Muestra en pantalla la cantidad de $$$DINERO$$$ que tiene.
function mostrarMonedero($dinero){
    echo "$".$dinero."\n";
}

//Muestra en pantalla la cantidad de ♥♥♥SALUD♥♥♥ que tiene.
function mostrarSalud($salud){
    echo "♥".$salud."\n";
}

//Muestra en pantalla el estado del jugador.
function status($dinero,$salud){
    echo "♥".$salud;
    echo "$".$dinero."\n";
}

//Muestra todos los comando posibles en ese momento.
function help(){
    echo "/help: ver todos los comandos.\n";
    echo "/status: ver todos el estado del personaje.\n";
    echo "/salud ver la salud del personaje.\n";
    echo "/monedero ver la cantidad de dinero que tiene tu personaje.\n";
    

}