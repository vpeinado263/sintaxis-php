<?php

echo "<h1>ENFER-DATS Trabajo Práctico - Semana 10</h1>";

echo "<h2>Script: Validación de habitación y cama</h2>";

echo "<hr>";

// Variables
$habitacion = 205;
$cama = 18;

echo "<h3>Validación de Habitación y Cama</h3>";

// Validación de habitación
echo "<strong>Habitación:</strong> $habitacion <br>";

if ($habitacion % 2 == 0) {
    echo "Resultado: Habitación par.<br><br>";
} else {
    echo "Resultado: Habitación impar.<br><br>";
}

// Validación de cama
echo "<strong>Cama Nº:</strong> $cama <br>";

if ($cama % 2 == 0) {
    echo "Resultado: Número par.";
} else {
    echo "Resultado: Número impar.";
}

?>