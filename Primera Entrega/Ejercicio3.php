<?php
//DefinO dos variables con valores numéricos y realizo operaciones aritméticas
//básicas (suma, resta, multiplicación, división, módulo).
$a=5;
$b=5;
echo "<br></br>";

echo $a + $b;
echo "<br></br>";
echo $a - $b;
echo "<br></br>";
echo $a * $b;
echo "<br></br>";
echo $a / $b;
echo "<br></br>";
echo $a % $b;
echo "<br></br>";
echo $a ** $b;
echo "<br></br>";

//Uso operadores de comparación para verificar si una variable es mayor,
//menor o igual que la otra.
echo $a==$b;
echo "<br></br>";

if($a==$b){
    echo"es igual";
}else{
    echo"no es igual";
};
echo "<br></br>";

//Usa un operador ternario para determinar si una variable es par o impar.
$numero=40;
$esPar= ($numero % 2 == 0) ? true : false;//Funcion Flecha, ahorra lineas de código
echo $esPar;//Da 1 porque es verdadero.
echo "<br></br>";


//Aplico operadores lógicos para verificar si ambas variables son mayores de
//10 y muestro un mensaje dependiendo del resultado.

if($a >10 && $b >10){
    echo"Ambas son mayores";
}else{
    echo"No son mayores los dos";
};
echo "<br></br>";

//Implemento operadores de incremento y decremento y muestro cómo
//cambian los valores de las variables.

$a++;
echo $a;
echo "<br></br>";
$b++;
echo $b;
echo "<br></br>";

?>