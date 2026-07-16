<?php

echo "<h1>ENFER-DATS  Script: Promedio de Insumos</h1>";

echo "<h2>Trabajo Práctico - Semana 10</h2>";

echo "<hr>";

// Variables
$turnoManana = 18;
$turnoTarde = 22;
$turnoNoche = 20;

// Operación matemática
$promedio = ($turnoManana + $turnoTarde + $turnoNoche) / 3;

// Salida de datos
echo "<h3>Promedio de insumos utilizados por turno</h3>";

echo "Turno Mañana: $turnoManana insumos <br>";
echo "Turno Tarde: $turnoTarde insumos <br>";
echo "Turno Noche: $turnoNoche insumos <br><br>";

echo "<strong>RESULTADO: $promedio</strong>";


?>