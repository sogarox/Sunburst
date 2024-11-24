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
        <a href="index.php">Realizar encuesta de monitoreo</a>
            <a href="#">Ver estadísticas</a>
            
        </div>
    </div>
    <div class="ahorro-menu">
        <a href="#" id="ahorro-toggle">Opciones para ahorrar energía</a>
        <div class="ahorro-settings" id="ahorro-settings">
            <a href="Consejos_cuidado.html">Consejos</a>
            <a href="#">Tiendas de páneles y electrodomesticos de ahorro</a>
        </div>
    </div>
    </div>

    <!-- Contenido principal -->
<div id="main-content" class="main-content">
    <!-- Aquí se cargará el contenido dinámico -->
</div>

<!-- Categorías y subcategorías -->
<div class="menu">
    <button class="menu-item" data-content="profile">Mi perfil</button>
    <button class="menu-item" data-content="consumo">Monitorear Consumo</button>
    <button class="menu-item" data-content="ahorro">Opciones para ahorrar energía</button>
</div>

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
    
    const mainContent = document.getElementById('main-content');

// Función para actualizar contenido dinámicamente
function updateContent(content) {
    mainContent.innerHTML = content;  // Actualiza con contenido HTML
}

// Mostrar/ocultar submenús
document.querySelectorAll('.menu-item').forEach(button => {
    button.addEventListener('click', function () {
        // Ocultar todos los submenús
        document.querySelectorAll('.submenu').forEach(submenu => submenu.style.display = 'none');

        // Mostrar el submenú correspondiente
        const submenuId = this.dataset.content;
        const submenu = document.getElementById(submenuId);
        if (submenu) submenu.style.display = 'block';
    });
});

// Manejar clics en las subcategorías
document.querySelectorAll('.submenu-item').forEach(button => {
    button.addEventListener('click', function () {
        const contentId = this.dataset.content;

        // Actualizar el contenido principal basado en el botón de subcategoría
        if (contentId === 'profile-modificar') {
            updateContent(`
                <h2>Modificar Perfil</h2>
                <form>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" placeholder="Ingresa tu nombre">
                    <br>
                    <label for="email">Correo:</label>
                    <input type="email" id="email" placeholder="Ingresa tu correo">
                    <br>
                    <button type="submit">Guardar cambios</button>
                </form>
            `);
        } else if (contentId === 'profile-cerrar') {
            updateContent(`
                <h2>Cerrar Sesión</h2>
                <p>¿Seguro que deseas cerrar sesión?</p>
                <button>Confirmar</button>
            `);
        } else if (contentId === 'consumo-encuesta') {
            updateContent(`
                <h2>Encuesta de Consumo</h2>
                <form>
                    <label for="consumo">¿Cuánto consumes al día?</label>
                    <input type="number" id="consumo" placeholder="Consumo en kWh">
                    <br>
                    <button type="submit">Enviar</button>
                </form>
            `);
        } else if (contentId === 'consumo-estadisticas') {
            updateContent(`
                <h2>Estadísticas de Consumo</h2>
                <p>Aquí se muestran las estadísticas de tu consumo de energía en el último mes.</p>
                <div>
                    <h3>Consumo total: 350 kWh</h3>
                    <p>Promedio diario: 11.67 kWh</p>
                </div>
            `);
        } else if (contentId === 'ahorro-consejos') {
            updateContent(`
                <h2>Consejos para Ahorrar Energía</h2>
                <ul>
                    <li>Apaga los electrodomésticos cuando no los estés usando.</li>
                    <li>Usa bombillas LED para reducir el consumo.</li>
                    <li>Reemplaza tus electrodomésticos viejos por versiones más eficientes.</li>
                </ul>
            `);
        } else if (contentId === 'ahorro-tiendas') {
            updateContent(`
                <h2>Tiendas de Ahorro</h2>
                <p>Estas son algunas tiendas recomendadas para adquirir productos de ahorro energético:</p>
                <ul>
                    <li><a href="#">Tienda A: Productos ecológicos</a></li>
                    <li><a href="#">Tienda B: Paneles solares</a></li>
                </ul>
            `);
        }
    });
});
</script>

</body>
</html>