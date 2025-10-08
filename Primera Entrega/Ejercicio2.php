<?php

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

?>