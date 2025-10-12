<?php
// EJERCICIO 4: Estructuras de control y bucles.
// Autor: Alejandro Casillas Moreno

// 1. Estructura condicional if-else para verificar si un número es positivo, negativo o cero.
$numero_a_verificar = 10;

// La estructura if-elseif-else se utiliza para verificar múltiples condiciones.
if ($numero_a_verificar > 0) {
    echo "El número $numero_a_verificar es positivo.<br>";
} elseif ($numero_a_verificar < 0) { // elseif permite verificar una segunda condición.
    echo "El número $numero_a_verificar es negativo.<br>";
} else { // El bloque else se ejecuta si ninguna condición anterior es verdadera.
    echo "El número es cero.<br>";
}

// 2. Bucle for para imprimir los números del 1 al 10.
for ($i = 1; $i <= 10; $i++) { // He usado $i como variable de control del bucle.
    echo $i;//Se muestra el valor de $i y se concatena con un espacio.
}

// 3. Bucle while que sume los números del 1 al 100 y muestre el resultado.
$contador = 1;
$suma_total = 0; // Se inicializa la variable resultado
// El bucle while repite el código mientras la condición sea verdadera.
while ($contador <= 100) {
    $suma_total = $suma_total + $contador; // Operador de asignación combinado
    $contador++; // Es crucial incrementar la variable de control para evitar un bucle infinito
}
echo "La suma de los números del 1 al 100 es: " . $suma_total . "<br><br>";

// 4. Estructura switch para mostrar el día de la semana basado en un número (1-7).
$dia_numero = 3;

switch ($dia_numero) { // La estructura switch evalúa una variable $dia_numero y compara con los casos definidos en este caso son números enteros.
    case 1:
        $dia_semana = "Lunes";
        break; // break se usa para salir de la estructura condicional o bucle
    case 2:
        $dia_semana = "Martes";
        break;
    case 3:
        $dia_semana = "Miércoles";
        break;
    case 4:
        $dia_semana = "Jueves";
        break;
    case 5:
        $dia_semana = "Viernes";
        break;
    case 6:
        $dia_semana = "Sábado";
        break;
    case 7:
        $dia_semana = "Domingo";
        break;
    default: // default se ejecuta si no hay ninguna coincidencia de caso 
        $dia_semana = "Número de día no válido (debe ser 1-7)";
}
echo "Si el número es $dia_numero, el día de la semana es: $dia_semana.<br><br>";

// 5. Array de nombres y uso de foreach para imprimir cada nombre.

// Crear un array indexado de nombres.
$nombres_clase = ["Ana", "Beto", "Carla", "David", "Elena"]; 

// foreach es específico para recorrer arrays o colecciones de datos.
foreach ($nombres_clase as $nombre) { // Itera sobre cada valor del array.
    echo $nombre;// Muestra el nombre actual.
}
?>