<?php
include_once("funciones.php");
//Este es mi primer juego, mi idea seria hacer un juego de aventura rpg con historia y que obtenja un puntaje de xp final para almacenar por jugador, y que tenga varios finales. 

// ARREGLOS
$estado = [
"hpMax" => 100,
"hp" => 100,
"monedero" => 0,
"velocidad" => 5,
"daño" => 3,
"inventario" => 7,
"xp" => 0,
"vidas" => 1
] ;

$inventario = [] ;


//variables
$espaciosOcupados = 0;


//               PROGRAMA PRINCIPAL              \\

echo escribirGris("              ****Bienvenido a HEAVEN FIRE****               ");
echo "\n\n\n";
do{
    echo "ingresa el nombre de tu HEROE:";
    $heroe = trim(fgets(STDIN));
    espacios();
    echo "Estas seguro de que el nombre de tu personaje es: ";
    echo escribiramarillo($heroe) ."?\n";
    echo "1) ES EL MEJOR NOMBRE DE LA VIDA!!\n";
    echo "2) mmmm creo que no.\n";
    $eleccion = solicitarNumeroEntre(1,2);
    espacios();
    switch($eleccion){
        case 1:
            echo "Perfecto, te llamaremos: ";
            echo escribirVerde($heroe)."\n";
            
            break;
        case 2:
            echo "Si, ese era horrible\n";
            break;
    }
}while($eleccion == 2);
espacios();
echo "Preparete por que esta aventura esta por comenzar....\nSiempre que quieras consultar los comandos puedes utilizar";
echo escribiramarillo("/help")."\n\n";
echo escribirVerde("Antes de comenzar puedes elegir algun atributo u objeto de inicio para tu aventura. (presiona ENTER al ver este simbolo: »)\n");
trim(fgets(STDIN));

echo "    \n";
echo escribirRojo("Amuleto de Arkarot");
echo "
     /\
   .'  `.
 .'      `.
 `.      .'
   `.  .'
     \/
";
echo "DESCRIPCION: El amuleto de Arkarot fue encontrado debajo de una laguna perdida en las fronteras de \n";
echo escribirGris("Divinia").". Este amuleto aumenta tu ♥salud maxima♥ (100 -> 125) »»";
trim(fgets(STDIN));
espacios();
echo "    \n";
echo escribirRojo("Meliniano");
echo "
 ,-,-. 
/ (_o \ 
\ o ) / 
 `-'-' 
";
echo "DESCRIPCION: Fuiste parte de un clan a las mitades de una jungla oculta.\n Tu ♦ velocidad ♦ aumenta de (5 -> 11) »» ";
trim(fgets(STDIN));
espacios();
echo "    \n";
echo escribirRojo("Bolsa");
echo "
       .--._ .
        \ ).'
         )|/
      _.'''-._
     (        \
      \        )
      )'-.    (
     /     _.-'\
    /           )
   ('-._       /
    \        _/ 
     '-.__=='' 
";
echo "DESCRIPCION: Es una simple bolsa.\n Tu ◄inventario► aumenta de (7 -> 10) »» ";
trim(fgets(STDIN));
espacios();
echo "    \n";
echo escribirRojo("Piedra");
echo "
   /---\
  /     \
  \     /
   \---/  
";
echo "DESCRIPCION: es una piedra, de algo servira...\nSe agregara una piedra en tu inventario. »» ";
trim(fgets(STDIN));
do{
    echo "1)";
    echo escribirRojo("Amuleto de Arkarot")."\n";
    echo "2)";
    echo escribirRojo("Meliniano")."\n";
    echo "3)";
    echo escribirRojo("Bolsa")."\n";
    echo "4)";
    echo escribirRojo("Piedra")."\n";
    echo "5)";
    echo escribirRojo("Nada")."\n";
    $eleccion = solicitarNumeroEntre(1,5);
    espacios();
    switch($eleccion){
        case 1:
            echo "Agregar amuleto de Arkarot?\n";
            echo "1)Si.\n";
            echo "2)No.\n";
            $bandera = solicitarNumeroEntre(1,2);
            if ($bandera == 1){
                $arkarot = true;
                $inventario["slot".$espaciosOcupados]["arkarot"] = $arkarot;
                $espaciosOcupados++;
                echo "Amuleto de Arkarot agregado.\n";
                echo "tu ♥salud maxima♥ aumenta de (100 -> 125).\n";
                $estado["hpMax"] = $estado["hpMax"] + 25;

            }
            break;
        case 2:
            echo "Ser Meliliano?\n";
            echo "1)Si.\n";
            echo "2)No.\n";
            $bandera = solicitarNumeroEntre(1,2);
            if ($bandera == 1){
                $estado["velocidad"] = $estado["velocidad"] + 6;
                echo "Tu ♦ velocidad ♦ aumenta de (5 -> 11).\n";
            }
            
            break;
        case 3:
            echo "Agregar Bolsa?\n";
            echo "1)Si.\n";
            echo "2)No.\n";
            $bandera = solicitarNumeroEntre(1,2);
            if ($bandera == 1){
                $estado["inventario"] = $estado["inventario"] + 3;
                echo "Tu ◄inventario► aumenta de (7 -> 10).\n";
            }

            break;
        case 4:
            echo "Agregar Piedra?\n";
            echo "1)Si.\n";
            echo "2)No.\n";
            $bandera = solicitarNumeroEntre(1,2);
            if ($bandera == 1){
                $piedra = true;
                $inventario["slot".$espaciosOcupados]["piedra"] = $piedra;
                $espaciosOcupados++;
                echo "Piedra agregada.\n";
            }
            
            break;
        case 5:
            echo "Seguro que no quieras nada??\n";
            echo "1)Si.\n";
            echo "2)No.\n";
            $bandera = solicitarNumeroEntre(1,2);
            if ($bandera == 1){
                Echo "O sos muy valiente o sos estupido. »»";
                trim(fgets(STDIN));
            }
    }
}while($bandera == 2);
print_r($inventario);
print_r($estado);


