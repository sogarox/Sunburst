<?php
session_start();
if (isset($_SESSION['usuario_id'])) {
    // Si ya hay una sesión activa, redirigir al lobby
    header("Location: lobby.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>

<body>
    <header>
        <a href="#" class="logo" alt="logo de la página">
            <img src="img/logo.png" alt="logo de la página">
        </a>
        <nav>
            <a href="about.html" class="nav-link">Sobre Nosotros</a>
            <a href="login.php" class="nav-link">Iniciar Sesión</a>
            <a href="register.php" class="nav-link">Registrarse</a>
        </nav>
    </header>

    <div class="background">
        <h1 class="slogan">Controla y optimiza tu energía</h1>
    </div>

    <div class="page-info">
        <section class="info-section">
            <h2>Bienvenido a Sunburst</h2>
            <p>
                Sunburst es tu aliado para el ahorro energético. A través de nuestras herramientas, podrás gestionar tu consumo de manera eficiente y
                optimizar tus recursos, contribuyendo al cuidado del medio ambiente y mejorando tu calidad de vida.
            </p>
            <img src="img/renovable.jpg" alt="">
        </section>
        
        <section class="about-section">
            <h2>Quiénes Somos</h2>
            <p>
                Somos un equipo de estudiantes apasionados por la tecnología y la sostenibilidad. Nuestro objetivo es ofrecerte soluciones innovadoras que
                te permitan reducir costos energéticos de manera segura y accesible. Estamos comprometidos con el bienestar del planeta y con proporcionarte
                las mejores herramientas para hacer un uso más eficiente de la energía.
            </p>
            <img src="img/renovable2.jpg" alt="">
        </section>

        <section class="services-section">
            <h2>¿Qué Ofrecemos?</h2>
            <ul>
                <li><strong>Optimización Energética:</strong> Herramientas avanzadas para reducir el consumo energético en tu hogar o negocio.</li>
                <li><strong>Seguimiento en Tiempo Real:</strong> Monitoreo constante para que puedas ajustar tu consumo y detectar oportunidades de ahorro.</li>
                <li><strong>Asesoramiento Personalizado:</strong> Recibe recomendaciones basadas en tu perfil de consumo energético.</li>
            </ul>
        </section>

        <section class="call-to-action">
            <h2>Comienza Ahora</h2>
            <p>
                Regístrate y comienza a tomar control sobre tu consumo energético. Sunburst te ayudará a hacer la diferencia, ¡haz tu parte por el medio ambiente
                y tu economía!
            </p>
            <a href="register.php" class="cta-button">Únete a Sunburst</a>
        </section>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Sunburst. Todos los derechos reservados.</p>
            <nav class="footer-nav">
                <a href="#">Política de Privacidad</a>
                <a href="#">Términos de Servicio</a>
                <a href="#">Contacto</a>
            </nav>
        </div>
    </footer>
</body>

</html>