<?php
require "login.php";
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
   background: linear-gradient(135deg, #74ebd5, #acb6e5);
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
   padding: 1em;
   color: #333;
}

/* Contenedor del formulario */
form {
   background-color: #ffffff;
   padding: 2.5em;
   border-radius: 12px;
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
   max-width: 400px;
   width: 100%;
   transition: transform 0.3s ease;
}

h2 {
    text-align: center;
    margin-bottom: 1.5em;
    color: #555;
    font-weight: 700;
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
    color: #aaa;
    font-size: 1.1em;
}

.input-icon input {
    width: 100%;
    padding: 0.8em;
    padding-left: 2.5em;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
    transition: border 0.3s, box-shadow 0.3s;
    font-size: 1em;
    outline: none;
}

.input-icon input:focus {
    border-color: #74ebd5;
    box-shadow: 0 0 5px rgba(116, 235, 213, 0.5);
    background-color: #fff;
}

/* Botón de envío */
input[type="submit"] {
    width: 100%;
    padding: 0.9em;
    border: none;
    border-radius: 8px;
    background-color: #74ebd5;
    color: #fff;
    font-size: 1em;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s, box-shadow 0.3s;
    text-transform: uppercase;
}

input[type="submit"]:hover {
    background-color: #67d6c5;
    box-shadow: 0 4px 8px rgba(103, 214, 197, 0.4);
}
    </style>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h2>Registro de Usuario</h2>

    <div class="input-icon">
        <i class="fas fa-user"></i>
        <input type="text" name="nombre" placeholder="Nombre" required>
    </div>

    <div class="input-icon">
        <i class="fas fa-id-badge"></i>
        <input type="text" name="uuid" placeholder="UUID" required>
    </div>

    <div class="input-icon">
        <i class="fas fa-envelope"></i>
        <input type="text" name="email" placeholder="E-mail" required>
    </div>

    <div class="input-icon">
        <i class="fas fa-phone"></i>
        <input type="text" name="telefono" placeholder="Teléfono" required>
    </div>

    <div class="input-icon">
        <i class="fas fa-home"></i>
        <input type="text" name="direccion" placeholder="Dirección" required>
    </div>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // collect value of input field
     $nombre = $_POST['nombre'];
     $uuid = $_POST['uuid'];
     $email = $_POST['email'];
     $telefono = $_POST['telefono'];
     $direccion = $_POST['direccion'];
     $usuario = (new UsuarioBuilder())
    ->setNombre( $nombre )
    ->setUuid( $uuid )
    ->setEmail( $email )
    ->setTelefono(telefono: $telefono )
    ->setDireccion( $direccion )
    ->build();

echo $usuario;
     
}

?>

</body>
</html>