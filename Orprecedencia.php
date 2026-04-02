<?php
$num1 = 2;
$num2 = 3;
$num3 = 4;

$resultado1 = $num1 + $num2 * $num3;
echo "Resultado sin parentesis: $resultado1<br>";

$resultado2 = ($num1 + $num2) * $num3;
echo "Resultado con parentesis: $resultado2<br>";
?>