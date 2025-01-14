<?php 

/* 

Operadores aritméticos
+	Suma
-	Resta
*	Multiplicación
/	División
%	Módulo
**	Exponenciación


Operadores de asignación
=
+=
-=
*=
/=


Operadores de comparación
==	Igual
===	Idéntico
!=	Diferente
<>	Diferente
!==	No idéntico
<   Menor que
>   Mayor que
<=  Menor o igual que
>=  Mayor o igual que


Operadores logicos
and		Y
or		O
xor		O exclusivo
!		No
&&		Y
||		O


Operadores de incremento/decremento
++$x	Pre-incremento
$x++	Post-incremento
--$x	Pre-decremento
$x--	Post-decremento


Operadores de cadena
.	Concatenación
.=	Concatenación y asignación

*/

$numero1 = 2;
$numero2 = 5;
$resultado1 = $numero1 + $numero2;
echo $resultado1;

echo "<br>";

$resultado2 = $numero1 ** $numero2;
echo $resultado2;

echo "<br>";


// Operadores de asignación
$numero3 = 10;
echo $numero3++;
echo "<br>";
echo $numero3;

echo "<br>";

$numero4 = 15;
echo ++$numero4;
echo "<br>";
echo $numero4;

echo "<br>";

// Operadores de cadena

$texto1 = "Hola";
$texto2 = "Mundo";
$texto3 = $texto1 . " " . $texto2;
echo $texto3;

echo "<br>";

$texto4 = "Peru";
$texto5 = "Lima";
$texto4 .= " " . $texto5;
echo $texto4;

?>