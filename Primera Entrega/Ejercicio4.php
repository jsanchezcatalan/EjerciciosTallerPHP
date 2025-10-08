<?php
//Utilice una estructura condicional if-else para verificar si un número es
//positivo, negativo o cero.
$numero=0;
if($numero>0){
    echo "el numero es positivo";
}else{
    if($numero==0){
        echo " el numero es igual a 0";
    }else{
        echo"El numero es negativo";
    }
}
echo "<br></br>";

//Utilice un bucle for para imprimir los números del 1 al 10.

for ($i=1; $i<=10; $i++){
    echo $i;
}
echo "<br></br>";
//Utilice un bucle while que sume los números del 1 al 100 y muestre el
//resultado.

$suma=1;
$resultado=0;
while($suma<=100){
    $resultado=$resultado+$suma;
    $suma++;
}
echo $resultado;
echo "<br></br>";
//Utilice switch para mostrar el día de la semana basado en un número (1-7).
$dia=1;
switch($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
       
}
echo "<br></br>";

//Cree un array de nombres y use foreach para imprimir cada nombre.
$verduras=["zanahoria ","cebolla ","pimiento"];

foreach($verduras as $verdura){
    echo $verdura;
}


?>