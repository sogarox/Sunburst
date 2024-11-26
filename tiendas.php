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

        h1, p {
            color: #2c3e50;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
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
        img {
            width: 250px ;
            height: 69px ;
        }
    </style>
</head>
<body>
    <h1>Páginas para Comprar Paneles Solares</h1>
    <p>Haz clic en los enlaces para explorar opciones de paneles solares:</p>
    <ul>
        <li>
            <a href="https://www.amazon.com/s?k=paneles+solares" target="_blank">Amazon</a>
            <br>
            <img src="https://i.imgur.com/yNjKszW.jpeg" alt="amazon">
            <p class="description">Encuentra una variedad de paneles solares con diferentes especificaciones y precios.</p>
        </li>
        <li>
            <a href="https://www.homedepot.com/c/solar_panel_systems" target="_blank">The Home Depot</a>
            <br>
            <img src="https://corporate.homedepot.com/sites/default/files/image_gallery/THD_logo.jpg" alt="hdepot">
            <p class="description">Opciones para sistemas de energía solar y paneles individuales.</p>
        </li>
        <li>
            <a href="https://www.enfsolar.com/pv/panel" target="_blank">ENF Solar</a>
            <br>
            <img src="https://cdn.enfsolar.com/z/s/logos/50860230abb2414e.png?v=1" alt="enf">
            <p class="description">Directorio global de proveedores de paneles solares y fabricantes.</p>
        </li>
        <li>
            <a href="https://www.ebay.com/sch/i.html?_nkw=solar+panels" target="_blank">eBay</a>
            <br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/EBay_logo.svg" alt="ebayllanos">
            <p class="description">Compra paneles solares nuevos y usados a precios competitivos.</p>
        </li>
        <li>
            <a href="https://www.solaris-shop.com/" target="_blank">Solaris</a>
            <br>
            <img src="https://www.solarreviews.com/content/company/1608c6747f1f3e21f1d987ac117dbe412ddb/logo/revolusun-logo-f084917f.png" alt="solaris">
            <p class="description">Especializados en productos de energía solar para sistemas residenciales y comerciales.</p>
            <br>
        <a href="inicio.php" class="button-style">Volver</a>
        </li>
    </ul>
</body>
</html>