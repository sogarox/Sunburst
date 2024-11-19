<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lobby - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos básicos para la estructura */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f4f4f9;
        }

        /* Barra superior */
        .navbar {
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        .navbar a:hover {
            background-color: #555;
            border-radius: 5px;
        }

        /* Sidebar a la izquierda */
        .sidebar {
            width: 250px;
            background-color: #222;
            color: white;
            padding-top: 20px;
            height: 100vh;
            position: fixed;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            text-decoration: none;
            color: white;
            border-bottom: 1px solid #444;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .sidebar .ahorro-menu a {
            padding-left: 30px;
        }
        .sidebar .consumo-menu a {
            padding-left: 30px;
        }
        .sidebar .profile-menu a {
            padding-left: 30px;
        }

        /* Contenido principal */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
            height: 100%;
        }

        .statistics {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .statistics h2 {
            margin-top: 0;
        }

        .profile-settings,
        .consumo-settings,
        .ahorro-settings {
            display: none;
        }

        .profile-settings.active,
        .consumo-settings.active,
        .ahorro-settings.active {
            display: block;
        }
    </style>
</head>
<body>

    <!-- Barra superior -->
    <div class="navbar">
        <div>
            <a href="#" id="home-link">Inicio</a>
            <a href="#" id="profile-link">Mi perfil</a>
        </div>
    </div>

    <!-- Sidebar a la izquierda -->
    <div class="sidebar">
    <div class="profile-menu">
        <a href="#" id="profile-toggle">Mi perfil</a>
        <div class="profile-settings" id="profile-settings">
            <a href="#">Modificar perfil</a>
            <a href="inicio.html">Cerrar sesión</a>
        </div>
    </div>
    <div class="consumo-menu">
        <a href="#" id="consumo-toggle">Monitorear Consumo</a>
        <div class="consumo-settings" id="consumo-settings">
        <a href="#">Realizar encuesta de monitoreo</a>
            <a href="#">Ver estadísticas</a>
            
        </div>
    </div>
    <div class="ahorro-menu">
        <a href="#" id="ahorro-toggle">Opciones para ahorrar energía</a>
        <div class="ahorro-settings" id="ahorro-settings">
            <a href="#">Consejos</a>
            <a href="#">Tiendas de páneles y electrodomesticos de ahorro</a>
        </div>
    </div>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <!-- Estadísticas -->
        <div class="statistics">
            <h2>Estadísticas</h2>
            <p>Aquí van las estadísticas. Puedes modificar esta sección según lo necesites.</p>
        </div>
    </div>

    <!-- Script para la funcionalidad -->
    <script>
    // Función para manejar el colapso/despliegue de los menús
    function toggleMenu(toggleId, settingsId) {
        const toggleElement = document.getElementById(toggleId);
        const settingsElement = document.getElementById(settingsId);

        toggleElement.addEventListener('click', function (event) {
            event.preventDefault(); // Evita el comportamiento por defecto del enlace
            settingsElement.classList.toggle('active');
        });
    }

    // Llamar a la función para cada menú
    toggleMenu('profile-toggle', 'profile-settings');
    toggleMenu('consumo-toggle', 'consumo-settings');
    toggleMenu('ahorro-toggle', 'ahorro-settings');
</script>

</body>
</html>