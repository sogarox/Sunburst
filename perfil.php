<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Tus estilos CSS aquí */
    </style>
</head>
<body>
    <div class="perfil-contenedor">
        <img src="img/foto.png" alt="Foto de perfil" class="perfil-imagen">
        <h1 class="perfil-nombre">Perfil del Usuario</h1>
        <div class="informacion-contacto">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "userdb";

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar conexión
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $usuario_id = intval($_SESSION['usuario_id']);

            // Consulta directa para obtener los datos del usuario
            $sql = "SELECT * FROM personas WHERE id = $usuario_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Mostrar cada fila
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='contacto-item'>";
                    echo "<i class='fas fa-user'></i>";
                    echo "<span>Nombre: " . htmlspecialchars($row['nombre']) . "</span>";
                    echo "</div>";

                    echo "<div class='contacto-item'>";
                    echo "<i class='fas fa-envelope'></i>";
                    echo "<span>Email: " . htmlspecialchars($row['email']) . "</span>";
                    echo "</div>";

                    echo "<div class='contacto-item'>";
                    echo "<i class='fas fa-phone'></i>";
                    echo "<span>Teléfono: " . htmlspecialchars($row['telefono']) . "</span>";
                    echo "</div>";
                }
            } else {
                echo "<p>No se encontraron datos en la tabla 'personas'.</p>";
            }

            $conn->close();
            ?>
        </div>
        <a href="lobby.php" class="boton-contacto">Volver</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --background-color: #ecf0f1;
            --text-color: #333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--background-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            line-height: 1.6;
        }

        .perfil-contenedor {
            background-color: white;
            width: 100%;
            max-width: 450px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .perfil-contenedor:hover {
            transform: scale(1.02);
        }

        .perfil-imagen {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--secondary-color);
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .perfil-nombre {
            color: var(--primary-color);
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .perfil-profesion {
            color: var(--secondary-color);
            font-size: 18px;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .perfil-descripcion {
            color: #666;
            margin-bottom: 25px;
            font-size: 15px;
        }

        .informacion-contacto {
            background-color: var(--background-color);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .contacto-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .contacto-item i {
            color: var(--secondary-color);
            margin-right: 15px;
            width: 25px;
            text-align: center;
        }

        .redes-sociales {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .redes-sociales a {
            color: var(--primary-color);
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .redes-sociales a:hover {
            color: var(--secondary-color);
        }

        .boton-contacto {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .boton-contacto:hover {
            background-color: var(--primary-color);
        }
    </style>
