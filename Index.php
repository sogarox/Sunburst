<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de Consumo Eléctrico</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilo global */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #5e72e4;
            color: white;
            text-align: center;
            padding: 30px 20px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        header p {
            margin-top: 10px;
            font-size: 1.2rem;
        }

        main {
            width: 90%;
            max-width: 700px;
            margin: 30px auto;
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Estilo para las secciones */
        section {
            margin-bottom: 20px;
        }

        section h2 {
            border-bottom: 2px solid #5e72e4;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #5e72e4;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 1rem;
            color: #555;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            background-color: #f1f4f8;
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin-right: 10px;
        }

        button {
            width: 100%;
            background-color: #5e72e4;
            color: white;
            border: none;
            padding: 15px;
            font-size: 1.1rem;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #3b4cca;
        }

        /* Estilo para las opciones de selección */
        input[type="radio"],
        input[type="checkbox"] {
            accent-color: #5e72e4;
        }

        section:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Encuesta de Consumo Eléctrico</h1>
        <p>Ayúdanos a conocer más sobre el consumo energético en los hogares.</p>
    </header>
    <main>
        <form method="POST" action="encuesta.php">
            <section>
                <h2>Electrodomésticos en tu hogar</h2>
                <label for="num_electrodomesticos">Número de electrodomésticos:</label>
                <input type="number" id="num_electrodomesticos" name="num_electrodomesticos" min="0">
                
                <h2>Seleccione sus electrodomésticos:</h2>
                <label><input type="checkbox" name="electrodomesticos[]" value="Televisión"> Televisión</label>
                <label><input type="checkbox" name="electrodomesticos[]" value="Computadora"> Computadora</label>
                <label><input type="checkbox" name="electrodomesticos[]" value="Aires Acondicionados"> Aires acondicionados</label>
                <label><input type="checkbox" name="electrodomesticos[]" value="Lavadora"> Lavadora</label>
                <label><input type="checkbox" name="electrodomesticos[]" value="Horno"> Horno</label>
                <label><input type="checkbox" name="electrodomesticos[]" value="Nevera"> Nevera</label>
                <label><input type="checkbox" name="electrodomesticos[]" value="Otros"> Otros</label>
            </section>
            <section>
                <h2>Uso de Electrodomésticos</h2>
                <p>¿Sabe cuánta electricidad consume su hogar al mes?</p>
                <label><input type="radio" name="consumo" value="aproximado"> Sí, aproximadamente</label><br>
                <label><input type="radio" name="consumo" value="no_seguro"> No estoy seguro</label><br>
                <label><input type="radio" name="consumo" value="no_sabe"> No lo sé</label><br>
                <label for="kwh">Si respondió "Sí", indique el consumo aproximado en kWh:</label>
                <input type="number" id="kwh" name="kwh">

                <p>¿Considera que su consumo de electricidad es alto, medio o bajo?</p>
                <select name="nivel_consumo">
                    <option value="alto">Alto</option>
                    <option value="medio">Medio</option>
                    <option value="bajo">Bajo</option>
                </select>

                <p>¿Qué electrodoméstico cree que más contribuye a su consumo eléctrico?</p>
                <select name="electro_consumo">
                    <option value="television">Televisión</option>
                    <option value="frigorifico">Frigorífico</option>
                    <option value="lavadora">Lavadora</option>
                    <option value="lavavajillas">Lavavajillas</option>
                    <option value="otros">Otros</option>
                </select>
            </section>

            <section>
                <h2>Hábitos de Uso</h2>
                <label for="television">¿Cuántas horas al día utiliza la televisión?</label>
                <select id="television" name="television">
                    <option value="menos1">Menos de 1 hora</option>
                    <option value="1-3">1-3 horas</option>
                    <option value="3-5">3-5 horas</option>
                    <option value="mas5">Más de 5 horas</option>
                </select>
                <br><br>

                <label for="lavadora">¿Cuántas veces a la semana utiliza la lavadora?</label>
                <select id="lavadora" name="lavadora">
                    <option value="menos1">Menos de 1 vez</option>
                    <option value="1-2">1-2 veces</option>
                    <option value="3-5">3-5 veces</option>
                    <option value="mas5">Más de 5 veces</option>
                </select>
            </section>
            <br>
            <button type="submit">Enviar Encuesta</button>
        </form>
    </main>
</body>
</html>
