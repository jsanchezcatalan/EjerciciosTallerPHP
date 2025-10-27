<?php
// -----------------------------
// EJEMPLO DE FUNCIONES EN PHP
// -----------------------------

// Definimos una función sencilla que muestra un mensaje
function saludar(){
    echo "Hola soy jesus"; // Muestra el texto en pantalla
}

// saludar(); // Si quitas los // se ejecutará y mostrará "Hola soy jesus"

// ---------------------------------------------------
// FUNCIÓN CON PARÁMETROS POR REFERENCIA Y POR VALOR
// ---------------------------------------------------
function incrementarValor(&$numero, &$numero2, $numero3){
    // Los parámetros con & se pasan por referencia
    // Eso significa que se modificará directamente la variable original

    $numero += 10;   // Aumenta el primer número en 10
    $numero2 += 34;  // Aumenta el segundo número en 34
    $numero3 += 678; // Aumenta el tercero, pero solo dentro de la función (por valor)
}

// Explicación rápida:
// &$numero y &$numero2 → se pasan por referencia (cambian fuera de la función)
// $numero3 → se pasa por valor (solo cambia dentro de la función)

// ---------------------------------------------------
// VARIABLES Y LLAMADA A LA FUNCIÓN
// ---------------------------------------------------
$valor = 5;   // Variable 1
$valor2 = 5;  // Variable 2
$Valor3 = 6;  // Variable 3 (ojo, la V mayúscula la hace diferente de $valor3)

// Llamamos a la función pasando las variables
incrementarValor($valor, $valor2, $Valor3);

// ---------------------------------------------------
// MOSTRAR RESULTADOS
// ---------------------------------------------------
echo $valor;  // Muestra 15 (porque 5 + 10 = 15)
echo "<br>";  // Salto de línea en HTML
echo $valor2; // Muestra 39 (porque 5 + 34 = 39)
echo "<br>";  // Otro salto de línea
echo $Valor3; // Muestra 6 (no cambió porque se pasó por valor)

// Definimos una nueva función llamada saludar2
// Esta función recibe un parámetro $nombre
// Si no se le pasa ningún valor, $nombre tomará el valor por defecto "amigo"
function saludar2($nombre = "amigo"){
    // Mostramos en pantalla un mensaje usando el nombre recibido
    // Si no se pasa nada, mostrará "Hola soy amigo"
    echo "Hola soy $nombre";
}

// Llamamos a la función saludar() que definimos antes
// Mostrará: "Hola soy jesus"
saludar();

// Llamamos a la nueva función saludar2 pasando "Jesus" como argumento
// Mostrará: "Hola soy Jesus"
saludar2("Jesus");

// Definimos una función llamada sumar
// Recibe 3 parámetros: $a, $b y $c
// $c se pasa por referencia (&$c), por lo que cualquier cambio dentro de la función afecta a la variable original
function sumar($a, $b, &$c){ 
    $c += 1; // Incrementamos $c en 1 cada vez que se llama la función

    return $a + $b; // Retornamos la suma de $a y $b
}

// Definimos variables para usar en la función
$a = 5;                 // Primer número a sumar
$b = 10;                // Segundo número a sumar
$numeroOperaciones = 0; // Contador de operaciones, se pasará por referencia a la función

// Llamamos a la función sumar y guardamos el resultado en $resultadoSuma
// NOTA: En tu código original usas $c, pero no está definida. Debe ser $numeroOperaciones
$resultadoSuma = sumar($a, $b, $numeroOperaciones); 

echo "<br>";               // Salto de línea en HTML
echo $resultadoSuma;       // Muestra 15 (5 + 10)
echo "<br>";
echo "El numero de operaciones es: $numeroOperaciones"; 
// Muestra 1, porque la función incrementó $numeroOperaciones en 1

?>