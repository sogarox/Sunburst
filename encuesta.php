<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $num_electrodomesticos = isset($_POST['num_electrodomesticos']) ? (int) $_POST['num_electrodomesticos'] : 0;

    $electrodomesticos_seleccionados = isset($_POST['electrodomesticos']) ? $_POST['electrodomesticos'] : [];

    $consumo = isset($_POST['consumo']) ? $_POST['consumo'] : '';
    $kwh = isset($_POST['kwh']) ? (int) $_POST['kwh'] : 0;

    $nivel_consumo = isset($_POST['nivel_consumo']) ? $_POST['nivel_consumo'] : '';
    $electro_consumo = isset($_POST['electro_consumo']) ? $_POST['electro_consumo'] : '';

    $television = isset($_POST['television']) ? $_POST['television'] : '';
    $lavadora = isset($_POST['lavadora']) ? $_POST['lavadora'] : '';

    echo "<h1>Resultados de la Encuesta</h1>";

    echo "<p><strong>Número de electrodomésticos:</strong> $num_electrodomesticos</p>";

    echo "<p><strong>Electrodomésticos seleccionados:</strong></p>";
    if (!empty($electrodomesticos_seleccionados)) {
        echo "<ul>";
        foreach ($electrodomesticos_seleccionados as $electro) {
            echo "<li>$electro</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No seleccionó ningún electrodoméstico.</p>";
    }

    echo "<p><strong>Consumo mensual:</strong> " . ($consumo === 'aproximado' ? "$kwh kWh" : "No especificado") . "</p>";
    echo "<p><strong>Nivel de consumo:</strong> $nivel_consumo</p>";
    echo "<p><strong>Electrodoméstico de mayor consumo:</strong> $electro_consumo</p>";

    echo "<p><strong>Uso de la televisión:</strong> $television horas al día</p>";
    echo "<p><strong>Uso de la lavadora:</strong> $lavadora veces por semana</p>";
}
?>
<a href="inicio.html">Cerrar sesión</a>