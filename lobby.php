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

        /* Barra superior con opciones */
        .navbar {
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
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

        /* Botón de Cerrar sesión en la barra superior */
        .navbar .logout-btn {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .navbar .logout-btn:hover {
            background-color: #e53935;
        }

        /* Sidebar a la izquierda */
        .sidebar {
            width: 250px;
            background-color: #222;
            color: white;
            padding-top: 20px;
            height: 100vh;
            position: fixed;
            top: 60px; /* Dejamos espacio para la barra superior */
            left: 0;
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

        /* Contenido principal */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            margin-top: 60px; /* Dejamos espacio para la barra superior */
            width: calc(100% - 250px);
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

        /* Estilos para el perfil */
        .profile-info p {
            margin: 8px 0;
        }

        .profile-info .modify-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        .profile-info .modify-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Barra superior con opciones -->
    <div class="navbar">
        <div>
            <a href="#" id="home-link">Inicio</a>
            <a href="#" id="profile-link">Mi perfil</a>
        </div>
        <button class="logout-btn" id="logout-btn">Cerrar sesión</button>
    </div>

    <!-- Sidebar a la izquierda -->
    <div class="sidebar">
        <a href="#" id="option1">Opción 1</a>
        <a href="#" id="option2">Opción 2</a>
        <a href="#" id="option3">Opción 3</a>
    </div>

    <!-- Contenido principal -->
    <div class="main-content" id="main-content">
        <!-- Bienvenida inicial -->
        <div class="statistics">
            <h2>Bienvenido</h2>
            <p>Selecciona una opción del menú para empezar.</p>
        </div>
    </div>

    <!-- Script para la funcionalidad -->
    <script>
        // Elementos del DOM
        const homeLink = document.getElementById('home-link');
        const option1 = document.getElementById('option1');
        const option2 = document.getElementById('option2');
        const option3 = document.getElementById('option3');
        const profileLink = document.getElementById('profile-link');
        const logoutBtn = document.getElementById('logout-btn');
        const mainContent = document.getElementById('main-content');

        // Función para actualizar contenido
        function updateMainContent(title, message) {
            mainContent.innerHTML = `
                <div class="statistics">
                    <h2>${title}</h2>
                    <p>${message}</p>
                </div>
            `;
        }

        // Mostrar información del perfil
        function showProfileInfo() {
            mainContent.innerHTML = `
                <div class="statistics profile-info">
                    <h2>Mi Perfil</h2>
                    <p><strong>Nombre:</strong> Juan Pérez</p>
                    <p><strong>Apellido:</strong> Pérez</p>
                    <p><strong>Ciudad:</strong> Buenos Aires</p>
                    <p><strong>Barrio:</strong> Palermo</p>
                    <p><strong>Dirección:</strong> Calle Ficticia 123</p>
                    <p><strong>Grupo Familiar:</strong> 4 miembros</p>
                    <button class="modify-btn">Actualizar perfil</button>
                </div>
            `;
        }

        // Funcionalidad del botón de "Cerrar sesión"
        logoutBtn.addEventListener('click', function(event) {
            event.preventDefault();
            alert("Cerrando sesión...");
            // Aquí podrías redirigir al usuario o manejar la lógica de cierre de sesión
        });

        // Eventos para cada opción
        homeLink.addEventListener('click', function(event) {
            event.preventDefault(); // Evitar recarga
            updateMainContent('Bienvenido al Inicio', 'Esta es la página de inicio.');
        });

        option1.addEventListener('click', function(event) {
            event.preventDefault(); // Evitar recarga
            updateMainContent('Hola Mundo', 'Bienvenido a la opción 1.');
        });

        option2.addEventListener('click', function(event) {
            event.preventDefault(); // Evitar recarga
            updateMainContent('Opción 2', 'Bienvenido a la opción 2.');
        });

        option3.addEventListener('click', function(event) {
            event.preventDefault(); // Evitar recarga
            updateMainContent('Opción 3', 'Bienvenido a la opción 3.');
        });

        profileLink.addEventListener('click', function(event) {
            event.preventDefault(); // Evitar recarga
            showProfileInfo(); // Mostrar información del perfil
        });
    </script>

</body>
</html>
