<?php
// EJERCICIO 1: Variables, constantes y sensibilidad a mayúsculas/minúsculas en PHP.
// Autor: Alejandro Casillas Moreno

// Declaro la variable $nombre y le asigno el valor de "Alejandro".
$nombre = "Alejandro";

// Muestra en pantalla el mensaje "Hola, mi nombre es " junto con la variable $nombre.
echo "Hola, mi nombre es ". $nombre;

// Define una constante llamada PI con el valor 3.1416
define("PI", 3.1416);

// Muestra el valor de la constante PI en pantalla
echo PI;

// Define la variable $Fruta
$Fruta = "Manzana";

// Define la variable $fruta (diferente en mayúsculas)
$fruta = "Naranja";

// Muestra la diferencia entre las dos variables, demostrando sensibilidad a mayúsculas/minúsculas
echo "la diferencia entre las variables es: " . $Fruta . " y " . $fruta;
?>