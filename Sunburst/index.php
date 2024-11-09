<?php
require "class.php";
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

/* Botón de envío */
input[type="submit"] {
    width: 100%;
    padding: 0.9em;
    border: none;
    border-radius: 12px;
    background-color: #3f51b5; /* Azul suave para el botón */
    color: #fff;
    font-size: 1em;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s, box-shadow 0.3s, transform 0.2s ease-in-out;
    text-transform: uppercase;
    box-shadow: 0 4px 8px rgba(63, 81, 181, 0.3); /* Sombra sutil */
}

/* Efecto hover en el botón de envío */
input[type="submit"]:hover {
    background-color: #303f9f; /* Azul más oscuro al pasar el mouse */
    box-shadow: 0 4px 10px rgba(63, 81, 181, 0.5); /* Sombra más profunda */
    transform: translateY(-2px); /* Efecto de elevación */
}

/* Efecto focus para el botón */
input[type="submit"]:focus {
    outline: none;
    box-shadow: 0 0 8px rgba(63, 81, 181, 0.6); /* Resalta el botón cuando se hace foco */
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