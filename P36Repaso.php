<?php
/* CBTIS 89
Programa almacena los nombres en un arreglo y despues los imprime 
Kevin Palomera 
3ºA Programación Matutino
*/
$nombre1 = "Mahomes";
$nombre2 = "Travis Kelce";
$nombre3 = "Lamar Jackson";
$nombre4 = "Lawrence";
$nombre5 = "McCaffrey";

$array = array($nombre1, $nombre2, $nombre3, $nombre4, $nombre5);

 //Se obtiene el numero de elementos 
$longitud = count($array);

//Recorre todos lo s elementos
for($i=0; $i<5; $i++ )
	{ //Se obtiene el valor de cada elenemto
	echo $array [$i];
	echo "<br>";
}  












?>