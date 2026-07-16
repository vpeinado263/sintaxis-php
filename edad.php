<?php

echo "<h1>ENFER-DATS Script: Validación de Edad</h1>";

echo "<h2>Trabajo Práctico - Semana 10</h2>";

echo "<hr>";

// Variables
$paciente = "NN";
$edad = 72;

// Salida de datos
echo "<h3>Validación de Edad del Paciente</h3>";

echo "Paciente: $paciente <br>";
echo "Edad: $edad años <br><br>";

// Estructura condicional
if ($edad >= 18) {
    echo "<strong>Resultado:</strong> Paciente mayor de edad.";
} else {
    echo "<strong>Resultado:</strong> Paciente menor de edad.";
}

?>