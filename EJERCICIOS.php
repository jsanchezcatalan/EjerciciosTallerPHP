<?php
//EJERCICIO 1
$nombre="Jesus ";
$apellidos="Sanchez Catalan";
echo"<br></br>";
echo "Hola, mi nombre es  ", $nombre, $apellidos;
echo"<br></br>";
define("PI",3.1416);
echo PI;
$minusculas="minusculas";
$MINUSCULAS="MAYUSCULAS";
echo"<br></br>";
echo $minusculas;
echo"<br></br>";
echo $MINUSCULAS;
echo"<br></br>";


//EJERCICIO 2
$edad=24;
var_dump($edad);
echo "<br></br>";
$altura=1.79;
var_dump($altura);
echo "<br></br>";
$casado=false;
var_dump($casado);
echo "<br></br>";
$profesion="Desarrollador Web";
var_dump($profesion);
echo "<br></br>";

//array Asociativo
$aPersona=["nombre"=>"Jesus", "apellidos"=>"Sanchez Catalan", "edad"=>24, "altura"=> 1.79, "casado"=>false, "profesion"=>"Desarrollador Web"];
var_dump($aPersona);

//Constante
define("NOMBRE_CURSO","Programacion PHP");
echo NOMBRE_CURSO;
echo "<br></br>";

//Función que recibe un array de números y devuelve suma de sus elementos
//Una funcion que realiza esto mas sencillo es array_sum($numeros);
$numeros=[0,1,2,3,4,5,6,7,8,9,10];
function sumaNumeros($numeros){
    $total=0;
    for($i=0; $i<count($numeros); $i++){
        $total= $total + $numeros[$i];
    }
    return $total;
}
echo sumaNumeros($numeros);
echo "<br></br>";

//Variable con valor null y verifico que lo sea a traves de is_null()
$tipoNull=Null;
if(is_null($tipoNull)){
    echo "es nulo";
}



//EJERCICIO 3

//Defina dos variables con valores numéricos y realice operaciones aritméticas
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

//Use operadores de comparación para verificar si una variable es mayor,
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


//Aplica operadores lógicos para verificar si ambas variables son mayores de
//10 y muestra un mensaje dependiendo del resultado.

if($a >10 && $b >10){
    echo"Ambas son mayores";
}else{
    echo"No son mayores los dos";
};
echo "<br></br>";

//Implementa operadores de incremento y decremento y muestra cómo
//cambian los valores de las variables.

$a++;
echo $a;
echo "<br></br>";
$b++;
echo $b;
echo "<br></br>";


//EJERCICIO 4



/*
var_dump($nombre, $apellidos);

echo "<br></br>";

var_dump($edad);

echo "<br></br>";
echo "<br></br>";

//array Asociativo
$aPersona=["nombre"=>"Jesus", "apellidos"=>"Sanchez Catalan", "edad"=>24, "altura"=> 1.79, "casado"=>false];
var_dump($aPersona);

echo "<br></br>";
$tipoNull=Null;
//is_null() comprueba si una variable es tipo null, porque php es un lenguaje interpretado, si llega una variable nula, pues de esta manera comprobamos para que no pete.
if(is_null($tipoNull)){
    echo "es nulo";
}

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

echo $a==$b;
echo "<br></br>";

if($a==$b){
    echo"es igual";
}else{
    echo"no es igual";
};

echo "<br></br>";
$esMayorDeEdad= ($b>18) ? true : false;//Funcion Flecha, ahorra lineas de código
echo $esMayorDeEdad;
var_dump($esMayorDeEdad);
*/

?>