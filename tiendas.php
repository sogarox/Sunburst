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
    <title>Venta de Paneles Solares</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #2c3e50;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #2c3e50;
        }

        .description {
            color: #555;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Páginas para Comprar Paneles Solares</h1>
    <p>Haz clic en los enlaces para explorar opciones de paneles solares:</p>
    <ul>
        <li>
            <a href="https://www.amazon.com/s?k=paneles+solares" target="_blank">Amazon</a>
            <p class="description">Encuentra una variedad de paneles solares con diferentes especificaciones y precios.</p>
        </li>
        <li>
            <a href="https://www.homedepot.com/c/solar_panel_systems" target="_blank">The Home Depot</a>
            <p class="description">Opciones para sistemas de energía solar y paneles individuales.</p>
        </li>
        <li>
            <a href="https://www.enfsolar.com/pv/panel" target="_blank">ENF Solar</a>
            <p class="description">Directorio global de proveedores de paneles solares y fabricantes.</p>
        </li>
        <li>
            <a href="https://www.ebay.com/sch/i.html?_nkw=solar+panels" target="_blank">eBay</a>
            <p class="description">Compra paneles solares nuevos y usados a precios competitivos.</p>
        </li>
        <li>
            <a href="https://www.solaris-shop.com/" target="_blank">Solaris</a>
            <p class="description">Especializados en productos de energía solar para sistemas residenciales y comerciales.</p>
        </li>
    </ul>
</body>
</html>