<?php
// EJERCICIO 3: Operadores en PHP.
// Autor: Alejandro Casillas Moreno

// 1. Definir variables y operaciones aritméticas
$numero1 = 15; // Define la primera variable numérica
$numero2 = 4;  // Define la segunda variable numérica
// Operaciones aritméticas básicas (Suma, Resta, Multiplicación, División, Módulo)
// Los operadores aritméticos son parte de los operadores básicos disponibles en PHP.
$suma = $numero1 + $numero2; 
$resta = $numero1 - $numero2; 
$multiplicacion = $numero1 * $numero2; 
$division = $numero1 / $numero2; 
$modulo = $numero1 % $numero2; 

// Mostrar los resultados de las operaciones
echo "Suma: $suma <br>"; 
echo "Resta: $resta <br>"; 
echo "Multiplicación: $multiplicacion <br>"; 
echo "División: $division <br>"; 
echo "Módulo: $modulo <br>"; 


// 2. Operadores de comparación (Mayor, Menor o Igual)


// Uso de la estructura if-else para la verificación. Los operadores de comparación son (>, <, ==).
if ($numero1 > $numero2) { 
    echo "$numero1 es mayor que $numero2 <br>"; 
} elseif ($numero1 < $numero2) { // Se recomienda usar elseif en lugar de if anidado en el else.
    echo "$numero1 es menor que $numero2 <br>"; 
} else {
    echo "$numero1 es igual a $numero2 <br>"; 
}


// 3. Operador ternario (Par o Impar)

// El operador ternario (? :) es una forma abreviada del if-else y se llama "operador condicional".
// Si el módulo de $numero1 dividido por 2 es 0, es par.
$resultado_paridad = ($numero1 % 2 == 0) ? "$numero1 es Par" : "$numero1 es Impar";
echo $resultado_paridad; 


// 4. Operadores lógicos (AND/OR)

// Se utilizan operadores lógicos como AND (&&) para combinar condiciones.
if ($numero1 > 10 && $numero2 > 10) {
    echo "Ambas variables $numero1 y $numero2 son mayores que 10.";
} else {
    echo "Al menos una de las variables no es mayor que 10.";
}

// 5. Operadores de Incremento y Decremento

$valor = 10;

// POST-INCREMENTO (muestra, luego suma)
echo "Valor inicial: $valor <br>";// Muestra 10
echo "Post-incremento: " . $valor++ . "<br>"; // Muestra 10
echo "Valor ahora: $valor <br>"; // Muestra 11

// PRE-INCREMENTO (suma, luego muestra)
echo "Pre-incremento: " . ++$valor . "<br>"; // Muestra 12
echo "Valor final: $valor <br><br>"; // Muestra 12

$valor = 10; // Reiniciamos

// POST-DECREMENTO (muestra, luego resta)
echo "Post-decremento: " . $valor-- . "<br>"; // Muestra 10
echo "Valor ahora: $valor <br>"; // Muestra 9

// PRE-DECREMENTO (resta, luego muestra)
echo "Pre-decremento: " . --$valor . "<br>"; // Muestra 8
echo "Valor final: $valor <br>"; // Muestra 8