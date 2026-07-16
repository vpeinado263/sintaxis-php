<?php

echo "<h1>ENFER-DATS  Trabajo Práctico - Semana 10</h1>";

echo "<h2>Script: Costo acumulado de un insumo</h2>";

echo "<hr>";

// Variables
$insumo = "Guantes descartables";
$costoUnitario = 350;

// Título
echo "<h3>Tabla de costo acumulado de insumos</h3>";

echo "Insumo: <strong>$insumo</strong><br><br>";

echo "Costo unitario: <strong>$$costoUnitario</strong><br><br>";

// Encabezado de la tabla
echo "<table border='1' cellpadding='8'>";
echo "<tr>";
echo "<th>Cantidad</th>";
echo "<th>Total</th>";
echo "</tr>";

// Bucle for
for ($cantidad = 1; $cantidad <= 5; $cantidad++) {

    $total = $cantidad * $costoUnitario;

    echo "<tr>";
    echo "<td>$cantidad</td>";
    echo "<td>$$total</td>";
    echo "</tr>";

}

echo "</table>";


?>