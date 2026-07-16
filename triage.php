<?php

echo "<h1>ENFER-DATS Trabajo Práctico - Semana 10</h1>";
echo "<h2>Clasificación de Prioridad (Triage)</h2>";
echo "<hr>";

$paciente = "NN";
$frecuenciaCardiaca = 132;

echo "<strong>Paciente:</strong> $paciente <br>";
echo "<strong>Frecuencia cardíaca:</strong> $frecuenciaCardiaca latidos por minuto <br><br>";

if ($frecuenciaCardiaca >= 120) {
    echo "<strong>Resultado:</strong><br>";
    echo "🔴 Prioridad ALTA<br>";
    echo "Requiere atención inmediata.";
} elseif ($frecuenciaCardiaca >= 90) {
    echo "<strong>Resultado:</strong><br>";
    echo "🟡 Prioridad MEDIA<br>";
    echo "Paciente estable, requiere evaluación.";

} else {
    echo "<strong>Resultado:</strong><br>";
    echo "🟢 Prioridad BAJA<br>";
    echo "Paciente sin signos de urgencia inmediata.";
}

?>