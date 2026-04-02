<?php 
// Ejemplo práctico: lectura de un array
$moneda = [
    "España" => "Euro",
    "Reino Unido" => "Libra",
    "USA" => "Dolar"
];

foreach ($moneda as $clave => $valor){
    echo "Pais: $clave Moneda: $valor <br>";
}
?>