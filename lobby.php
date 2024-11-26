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

        }

        /* Barra superior con opciones */
        .navbar {
            width: 100%;
            background-color: #333;
            color: white;
            font-size: 1.1em;
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
            background-color: #d2e2c3;
            color: #333;
            transition: background-color 0.3s;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        .navbar a:hover {
            background-color: #c4dba1;
            color: white;
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
            font-size: 1.1em;
            padding-top: 20px;
            height: 100vh;
            position: fixed;
            top: 60px; /* Dejamos espacio para la barra superior */
            left: 0;
        }

        .sidebar a {
            display: block;
            padding: 12px;
            border-radius: 3px;
            text-decoration: none;
            background-color: #d2e2c3;
            color: #333;
            transition: background-color 0.3s;
            border-bottom: 2px solid #76806c;
        }

        .sidebar a:hover {
            background-color: #c4dba1;
            color: white;
        }

        /* Contenido principal */
        .main-content {
<<<<<<< HEAD
            margin-left: 250px;
            padding: 20px;
            margin-top: 60px; /* Dejamos espacio para la barra superior */
            width: calc(100% - 250px);
=======
            width: 100%;
>>>>>>> 80e6dd33e12919d189304dd3b199b9c19cddad99
            height: 100%;
            background-color: #f8fbf3;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
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

        img {
            max-width: 100%;
            max-height: 100%;
            height: auto;
            width: auto;
        }

.info-overlay {
    position: absolute;
    top: 150px; /* Ajusta según la posición deseada */
    left: 350px; /* Ajusta según la posición deseada */
    background-color: rgba(255, 255, 255, 0.85); /* Fondo semi-transparente para mejorar la legibilidad */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px; /* Ajusta según la necesidad */
    color: #333; /* Color del texto acorde a tu diseño */
}


    </style>
</head>
<body>
<<<<<<< HEAD

    <!-- Barra superior con opciones -->
=======
<div class="info-overlay">
    <h2>Bienvenido al Lobby de Gestión Energética</h2>
    <p>
        Aquí encontrarás todas las herramientas necesarias para optimizar y monitorear tu consumo energético.
        Explora las opciones del menú para acceder a funciones como monitoreo de consumo, estadísticas y consejos de ahorro.
    </p>
</div>
<img src="img/background-lobby.jpg" alt="Logo de la página">
    <!-- Barra superior -->
>>>>>>> 80e6dd33e12919d189304dd3b199b9c19cddad99
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

<<<<<<< HEAD
=======


<div class="submenu" id="profile" style="display: none;">
    <button class="submenu-item" data-content="profile-modificar">Modificar Perfil</button>
    <button class="submenu-item" data-content="profile-cerrar">Cerrar Sesión</button>
</div>

<div class="submenu" id="consumo" style="display: none;">
    <button class="submenu-item" data-content="consumo-encuesta">Realizar Encuesta</button>
    <button class="submenu-item" data-content="consumo-estadisticas">Ver Estadísticas</button>
</div>

<div class="submenu" id="ahorro" style="display: none;">
    <button class="submenu-item" data-content="ahorro-consejos">Consejos</button>
    <button class="submenu-item" data-content="ahorro-tiendas">Tiendas de Ahorro</button>
</div>
>>>>>>> 80e6dd33e12919d189304dd3b199b9c19cddad99
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
