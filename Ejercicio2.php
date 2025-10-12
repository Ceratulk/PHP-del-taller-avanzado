<?php
// EJERCICIO 2: Variables, constantes, arrays y funciones en PHP.
// Autor: Alejandro Casillas Moreno

// REQUISITO 1: Definir variables de distintos tipos y usa var_dump().
$entero = 10;          // Definición de variable de tipo integer (entero) 
$flotante = 10.5;      // Definición de variable de tipo float (flotante/decimal) 
$cadena = "Hola Mundo"; // Definición de variable de tipo string (cadena) 
$booleano = true;      // Definición de variable de tipo boolean (booleano) 


var_dump($entero);     // Imprime el valor de la variable $entero 
var_dump($flotante);   // Imprime el valor de la variable $flotante
var_dump($cadena);     // Imprime el valor de la variable $cadena
var_dump($booleano);   // Imprime el valor de la variable $booleano 

// REQUISITO 2: Crear un array asociativo y mostrar sus elementos.
$persona = [
    "nombre" => "Iker",  // Clave "nombre"
    "edad" => 40, // Clave "edad"
    "ciudad" => "Barcelona" // Clave "ciudad"
];

echo "Nombre: " . $persona["nombre"] . ", Edad: " . $persona["edad"] . ", Ciudad: " . $persona["ciudad"];


// REQUISITO 3: Definir una constante NOMBRE_CURSO y mostrarla.

define("NOMBRE_CURSO", "Programación PHP"); // Define la constante NOMBRE_CURSO.
echo "El valor de la constante NOMBRE_CURSO es: " . NOMBRE_CURSO; // Muestra el valor de la constante NOMBRE_CURSO. 

// REQUISITO 4: Crear una función para sumar números de un array.

/**
 * Función que recibe un array de números y devuelve la suma total.
 * Utilizamos foreach para recorrer arrays de forma sencilla.
 */

function sumaArray(array $numeros) // Define la función llamada sumaArray para sumar los números.
{
    $total = 0; // Inicializa el acumulador $total en 0.
    foreach ($numeros as $numero) { // Recorre el array
        $total = $total + $numero; // Suma cada elemento al total
    }
    return $total; // Devuelve la suma total
}

// Llamada a la función con un array de ejemplo y mostrar el resultado
$numeros_ejemplo = [27-31];
$resultado_suma = sumaArray($numeros_ejemplo);
echo "La suma de los elementos del array es: " . $resultado_suma; // Muestra el resultado

// REQUISITO 5: Declarar variable null y verificar con is_null().

$SinValor = null; // Declara la variable con valor null 

// Utilizo la función is_null() y el operador ternario para mostrar el resultado.
if (is_null($SinValor)) { // Usa la función is_null() 
    echo "La variable tiene valor null.";
} else {
    echo "La variable no es null.";
}