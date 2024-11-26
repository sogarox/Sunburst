<?php
echo "hola mundo<br>";  // Asegúrate de que este texto se imprima

session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanear la entrada
    $usuario_id = intval($_SESSION['usuario_id']);  // Asegúrate de que sea un número entero

    // Debugging: Verifica el valor de usuario_id
    echo "ID de usuario: " . $usuario_id . "<br>";

    // Consulta SQL sin usar prepared statements, con el valor directamente insertado
    $sql = "SELECT * FROM encuesta WHERE id_usuario = $usuario_id";
    
    $result = $conn->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Mostrar los resultados
        while ($row = $result->fetch_assoc()) {
            echo "Número de electrodomésticos: " . $row['num_electrodomesticos'] . "<br>";
            echo "Electrodomésticos seleccionados: " . $row['electrodomesticos_seleccionados'] . "<br>";
            echo "Consumo: " . $row['consumo'] . "<br>";
            echo "Kwh: " . $row['kwh'] . "<br>";
            echo "Nivel de consumo: " . $row['nivel_consumo'] . "<br>";
            echo "Electrodoméstico de mayor consumo: " . $row['electro_consumo'] . "<br>";
            echo "Televisión: " . $row['television'] . " horas al día<br>";
            echo "Lavadora: " . $row['lavadora'] . " veces por semana<br>";
            echo "Fecha: " . $row['fecha'] . "<br><br>";
        }
    } else {
        echo "No se encontraron encuestas para este usuario.<br>";
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "No se ha enviado el formulario.<br>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>u</title>
    <head>
        PLAIN TEXT
        <body>
            PLAIN TEXT
            I'm on a plain
        </body>
    </head>

