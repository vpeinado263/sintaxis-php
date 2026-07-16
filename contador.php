<?php

echo "<h1>ENFER-DATS Trabajo Práctico - Semana 10</h1>";

echo "<h2>Script: Contador de pacientes atendidos</h2>";

echo "<hr>";


// Variables
$turno = "Mañana";
$contador = 1;

// Título
echo "<h3>Registro de pacientes atendidos</h3>";

echo "Turno: <strong>$turno</strong><br><br>";

// Bucle while
while ($contador <= 5) {

    echo "Paciente $contador atendido.<br>";

    $contador++;
}

// Resultado final
echo "<br><strong>Total de pacientes atendidos: " . ($contador - 1) . "</strong>";

?>