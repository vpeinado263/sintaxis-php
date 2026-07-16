<?php
echo "<h1>ENFER-DATS</h1>";
echo "<h2>Trabajo Práctico - Semana 10</h2>";
echo "<h3>Script: Promedio de Insumos</h3>";

echo "<hr>";
//Uso de variables
$turnoManana = 18;
$turnoTarde = 22;
$turnoNoche = 20;

// Operación matemática básica
$promedio = ($turnoManana + $turnoTarde + $turnoNoche) / 3;


echo "<h4>Promedio de insumos utilizados por turno</h4>";

echo "Turno Mañana: $turnoManana insumos <br>";
echo "Turno Tarde: $turnoTarde insumos <br>";
echo "Turno Noche: $turnoNoche insumos <br><br>";

echo "<strong>RESULTADO: $promedio</strong>";


?>