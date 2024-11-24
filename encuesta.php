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

    // Diseño HTML con CSS
    echo "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultados de la Encuesta</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f7f9fc;
                color: #333;
                margin: 0;
                padding: 20px;
                text-align: center;
            }
            h1 {
                color: #5e72e4;
                margin-bottom: 20px;
            }
            .result-container {
                background-color: white;
                padding: 30px;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                max-width: 600px;
                margin: 0 auto;
                text-align: left;
            }
            p, li {
                font-size: 1.1rem;
                line-height: 1.6;
            }
            strong {
                color: #5e72e4;
            }
            ul {
                list-style-type: none;
                padding: 0;
            }
            li {
                background-color: #f1f4f8;
                margin: 8px 0;
                padding: 10px;
                border-radius: 10px;
            }
            a {
                display: inline-block;
                margin-top: 20px;
                text-decoration: none;
                color: white;
                background-color: #5e72e4;
                padding: 10px 20px;
                border-radius: 30px;
                transition: background-color 0.3s;
            }
            a:hover {
                background-color: #3b4cca;
            }
        </style>
    </head>
    <body>
        <h1>Resultados de la Encuesta</h1>
        <div class='result-container'>
            <p><strong>Número de electrodomésticos:</strong> $num_electrodomesticos</p>
            <p><strong>Electrodomésticos seleccionados:</strong></p>";
            
            if (!empty($electrodomesticos_seleccionados)) {
                echo "<ul>";
                foreach ($electrodomesticos_seleccionados as $electro) {
                    echo "<li>$electro</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No seleccionó ningún electrodoméstico.</p>";
            }

            echo "
            <p><strong>Consumo mensual:</strong> " . ($consumo === 'aproximado' ? "$kwh kWh" : "No especificado") . "</p>
            <p><strong>Nivel de consumo:</strong> $nivel_consumo</p>
            <p><strong>Electrodoméstico de mayor consumo:</strong> $electro_consumo</p>
            <p><strong>Uso de la televisión:</strong> $television horas al día</p>
            <p><strong>Uso de la lavadora:</strong> $lavadora veces por semana</p>
            <a href='lobby.php'>Volver</a>
        </div>
    </body>
    </html>";
}
?>