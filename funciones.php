<?php

//El proposito de este archivo es almacenar funciones que deba reutilizar muchas veces.





//Muestra en pantalla el estado del jugador.
function status($vida,$salud,$dinero,$velocidad,$daño,$espacio,$xp){
    echo "↨vidas↨ ->  ".$vida."\n";
    echo "♥Salud♥ -> ".$salud."\n";
    echo '$Monedas$ -> '.$dinero."\n";
    echo "♦Velocidad♦ -> ".$velocidad."\n";
    echo "¤Daño¤ -> ".$daño."\n";
    echo "◄Espacio► ->  ".$espacio."\n";
    echo "§Experiencia§ ->  ".$xp."\n";
}


//Muestra todos los comando posibles en ese momento.
function help(){
    echo "/help: ver todos los comandos.\n";
    echo "/estado: ver todos el estado del personaje.\n";
    echo "/inventario: ver ti inventario y objetos.\n";
    echo "/nivel: te muestra cuanto te falta para subir de nivel.\n";
    echo "/atributos: enseña los atributos adquiridos.\n";
    echo "/suicidarme: tu personaje se suicida y acaba la partida por completo.\n";
}


/**
 * Esta funcion pide un numero y verifica que este dentro de los parametros formales.
 * @param int $min 
 * @param int $max
 * @return int $numero
 */ 
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    $numero = trim(fgets(STDIN));
	
	if (is_numeric($numero)) { //determina si un string es un número. puede ser float como entero.
        $numero  = $numero * 1; //con esta operación convierto el string en número.
    }
	
    while (!is_numeric($numero) ||( is_int($numero) && !($numero >= $min && $numero <= $max))) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
		if (is_numeric($numero)) {
			$numero  = $numero * 1; 
		}
    }
    
    return $numero;
}



//salta 3 lineas del codigo.
function espacios(){
    echo "\n";
    echo "\n";
    echo "\n";
}


/**
 * Escrbir un texto en color ROJO
 * @param string $texto)
 */
function escribirRojo($texto)
{
    echo "\e[1;37;41m $texto \e[0m";
}


/**
 * Escrbir un texto en color VERDE
 * @param string $texto)
 */
function escribirVerde($texto)
{
    echo "\e[1;37;42m $texto \e[0m";
}


/**
 * Escrbir un texto en color AMARILLO
 * @param string $texto)
 */
function escribirAmarillo($texto)
{
    echo "\e[1;37;43m $texto \e[0m";
}


/**
 * Escrbir un texto en color GRIS
 * @param string $texto)
 */
function escribirGris($texto)
{
    echo "\e[1;34;47m $texto \e[0m";
}


/**
 * Escrbir un texto pantalla.
 * @param string $texto)
 */
function escribirNormal($texto)
{
    echo "\e[0m $texto \e[0m";
}

