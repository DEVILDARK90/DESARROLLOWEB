<?php
// Definición de la función saludo: sin parametreos 
function saludo() {
 
    echo "<h2>"."Buenas tardes, La fecha de hoy es: ";
    echo date ("d/m/Y")."<h2><br>";
}    

function nombre() {
    echo "<h2>"."Mi nombre es: ";
    echo "Edgar Quezada"."<h2><br>";
}
echo "<h1>"."FUNCIONES EN PHP"."</h1><br>";
function tarea() {
    echo "Esta es mi tarea de web: ";
    echo "Prueba OK ";
}

//funcion con envio de parametros
function saludar ($nombre,$apellido) {
    echo "<h2>"."Buenas tardes con todos, mi nombre es ".$nombre." ".$apellido."<h2>";    
}

function multiplicar ($num1, $num2, $num3, $num4) {

    echo "<h2>"."La multiplicacion de los numeros es: ".$num1*$num2*$num3*$num4."<h2>";    
}

function areaCirculo ($radio1,$radio2,$radio3) {
    echo "<h2>"."El area del Circulo es: ".pi()*pow($radio1,2)."</h2>";
    echo "<h2>"."El area del Circulo es: ".pi()*pow($radio2,2)."</h2>";
    echo "<h2>"."El area del Circulo es: ".pi()*pow($radio3,2)."</h2>";

}
function areadelCuadrado ($lado) {
    return "<h2>"."El area del Cuadrado es: ".pow($lado,2)."</h2>";
    
}



echo saludo();
echo nombre();
echo tarea();

echo saludar("Edgar Leodan", "Quezada");
echo saludar("Carlos", "Quezada");
echo saludar("Luis", "Quezada");

echo multiplicar(2, 3, 4, 5);
echo multiplicar(1, 2, 3, 4);
echo multiplicar(5, 6, 7, 8);

$r1=5;
$r2=10;
$r3=15;
echo areaCirculo ($r1,$r2,$r3);

$lado1 =2;
$lado2 =5;
$lado3 =10;


$area1 = areadelCuadrado ($lado1);
$area2 = areadelCuadrado ($lado2);
$area3 = areadelCuadrado ($lado3);

echo $area1;
echo $area2;
echo $area3;


?> 