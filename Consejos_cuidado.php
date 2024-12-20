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
    <title>Consejos para un Consumo Energético Responsable</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: #f0f9ff;
            color: #1a365d;
            line-height: 1.6;
        }

        .header {
            background: linear-gradient(135deg, #1e40af, #3b82f6);
            color: white;
            padding: 2rem;
            text-align: center;
            border-radius: 0 0 2rem 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 1rem;
        }

        .card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            transition: transform 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #1e40af;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .card-content {
            color: #4a5568;
        }

        .card-content ul {
            list-style-position: inside;
            margin-left: 1rem;
        }

        .footer {
            text-align: center;
            padding: 2rem;
            margin-top: 2rem;
            background: white;
            border-radius: 2rem 2rem 0 0;
        }

        .eco-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }
            
            .header {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Consejos para un Consumo Energético Responsable</h1>
            <p style="margin-top: 1rem;">Aprende cómo reducir tu huella energética y ahorrar en tu factura de luz</p>
        </div>
    </header>

    <main class="container">
        <div class="grid">
            <div class="card">
                <h2><span>📊</span> Monitorea tu consumo</h2>
                <div class="card-content">
                    <p>Utiliza nuestra pagina web para analizar tu consumo eléctrico. 
                        Saber qué consume más energía te ayudará a tomar decisiones informadas.</p>
                </div>
            </div>
            <div class="card">
                <h2><span>💡</span> Apaga los electrodomésticos en espera</h2>
                <div class="card-content">
                    <p>Muchos aparatos consumen electricidad incluso cuando no están en uso.
                         Apaga completamente los dispositivos o desconéctalos de la corriente para evitar este consumo innecesario.</p>
                </div>
            </div>

            <div class="card">
                <h2><span>🌞</span> Aprovecha la luz natural</h2>
                <div class="card-content">
                    <p>Durante el día, abre cortinas y ventanas para iluminar tu hogar con luz natural. 
                        Esto reduce la necesidad de encender lámparas y focos.</p>
                </div>
            </div>

            <div class="card">
                <h2><span>💧</span> Usa agua caliente de manera eficiente</h2>
                <div class="card-content">
                    <ul>
                        <li>Limita el tiempo en la ducha</li>
                        <li>Usa agua fría para tareas que no requieran calentamiento</li>
                        <li>Repara fugas en tuberías o calentadores</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <h2><span>📺</span> Compra electrodomésticos eficientes</h2>
                <div class="card-content">
                    <p>Busca electrodomésticos con etiquetas de eficiencia energética.
                         Estos consumen menos electricidad, lo que te ayuda a ahorrar dinero a largo plazo.</p>
                </div>
            </div>

            <div class="card">
                <h2><span>🌱</span> Plantas y aislamiento natural</h2>
                <div class="card-content">
                    <p>Usa plantas y materiales aislantes para mantener tu hogar fresco en verano y cálido en invierno. 
                        Esto reduce la necesidad de aire acondicionado o calefacción.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="eco-icon">🌎</div>
            <p>Con pequeños cambios en tus hábitos, puedes marcar una gran diferencia para el planeta y tu economía.</p>
            <a href = "lobby.php">Volver</a>
        </div>
    </footer>
</body>
</html>