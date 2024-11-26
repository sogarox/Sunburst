<?php
session_start();
require "class.php";
if (isset($_SESSION['usuario_id'])) {
    // Si ya hay una sesión activa, redirigir al lobby
    header("Location: lobby.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userdb";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
// collect value of input field
$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

if (empty($nombre) || empty($contrasena)) {
    header("Location: login.php");
    exit();
}
    // Consultar si el usuario existe
    $sql = "SELECT * FROM personas WHERE nombre = '$nombre'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // El usuario existe, ahora verificar la contraseña
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row['contrasena'])) {
            // Contraseña correcta, redirigir a otra página
            $_SESSION['usuario_id'] = $row['id'];
            header("Location: lobby.php");
            exit();
        } else {
            // Contraseña incorrecta
            header("Location: login.php");
        exit();
        }
    } else {
        // El usuario no existe
        header("Location: login.php");
        exit();
    }

    $conn->close();
}
     
    
//echo $usuario;
     

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Formulario de Usuario</title>
    <style>
/* Estilos generales de la página */
* {
   box-sizing: border-box;
   margin: 0;
   padding: 0;
}

body {
   font-family: 'Roboto', sans-serif;
   background: linear-gradient(135deg, #dce775, #81c784); /* Gradiente suave de verde claro */
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
   padding: 1em;
   color: #333;
}

/* Contenedor del formulario */
form {
   background-color: #ffffff; /* Fondo blanco para hacer resaltar los campos */
   padding: 2.5em;
   border-radius: 12px;
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
   max-width: 400px;
   width: 100%;
   background: linear-gradient(135deg, #f1f8e9, #f5f5f5); /* Fondo de formulario con un tono gris claro */
}

/* Estilo del título del formulario */
h2 {
    text-align: center;
    margin-bottom: 1.5em;
    color: #555; /* Color más suave para el título */
    font-weight: 700;
    font-size: 1.8em;
}

/* Estilos para el contenedor de iconos */
.input-icon {
    position: relative;
    margin-bottom: 1.5em;
}

.input-icon i {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #888; /* Gris oscuro para los iconos */
    font-size: 1.2em;
}

.input-icon input {
    width: 100%;
    padding: 0.8em;
    padding-left: 2.5em;
    border: 1px solid #ddd; /* Borde gris neutro */
    border-radius: 8px;
    background-color: #f5f5f5; /* Fondo gris claro */
    transition: border 0.3s, box-shadow 0.3s;
    font-size: 1em;
    outline: none;
}

/* Estilos para el foco de los campos */
.input-icon input:focus {
    border-color: #81c784; /* Tono verde suave cuando se enfoca */
    box-shadow: 0 0 5px rgba(116, 235, 213, 0.5);
    background-color: #fff; /* Fondo blanco al enfocarse */
}

/* Estilo compartido para botón y enlace */
.button-style {
    width: 100%;
    padding: 0.9em;
    border: none;
    border-radius: 12px;
    text-decoration: none;
    color: #fff;
    font-size: 1em;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s, box-shadow 0.3s, transform 0.2s ease-in-out;
    text-transform: uppercase;
    box-shadow: 0 4px 8px rgba(63, 81, 181, 0.3); /* Sombra sutil */
    box-sizing: border-box;
    display: block;
    margin: 0 auto;
    background-color: #3f51b5; /* Azul suave para el botón */
}

/* Hover en el botón y enlace */
.button-style:hover {
    background-color: #303f9f; /* Azul más oscuro al pasar el mouse */
    box-shadow: 0 4px 10px rgba(63, 81, 181, 0.5); /* Sombra más profunda */
    transform: translateY(-2px); /* Efecto de elevación */
}

/* Focus en el botón y enlace */
.button-style:focus {
    outline: none;
    box-shadow: 0 0 8px rgba(63, 81, 181, 0.7), 0 4px 8px rgba(63, 81, 181, 0.3); /* Sombra con un brillo adicional */
    transform: translateY(-2px); /* Mantiene la elevación */
    background-color: #3949ab; /* Color ligeramente diferente para indicar foco */
}

.button-text-container {
    text-align: center;
}


    </style>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h2>Iniciar Sesión</h2>

    <div class="input-icon">
        <i class="fas fa-user"></i>
        <input type="text" name="nombre" placeholder="Nombre" required>
    </div>

    <div class="input-icon">
        <i class="fas fa-id-badge"></i>
        <input type="password" name="contrasena" placeholder="Contrasena" required>
    </div>

    <input type="submit" class="button-style" value="Enviar">
    <div class="button-text-container">
        <br><br>
        <a href="inicio.php" class="button-style">Volver</a>
    </div>
</form>


</body>
</html>