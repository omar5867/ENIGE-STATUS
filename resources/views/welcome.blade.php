<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmbientTrack</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos generales */
        body {
            font-family: 'Roboto', sans-serif;
            color: #FFFFFF;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            background: url('admin_assets/img/creditos.png') no-repeat center center fixed;
            background-size: cover;
            padding-top: 150px; /* Desplaza el contenido hacia abajo */
        }

        /* Encabezado */
        header {
            background-color: rgba(0, 0, 0, 0.8); 
            width: 100%;
            padding: 15px 20px;
            position: fixed;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
        }

        #logo {
            max-width: 180px;
            filter: drop-shadow(0px 4px 6px rgba(0, 0, 0, 0.3));
        }

        .top-bar {
            display: flex;
        }

        /* Botones */
        .button {
            margin-left: 15px;
            padding: 10px 20px;
            text-decoration: none;
            color: #FEFEFE;
            font-size: 1em;
            background-color: #1A73E8;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .button:hover {
            background-color: #4285F4;
            transform: scale(1.05);
        }

        /* Títulos y texto */
        h1 {
            font-size: 5em; /* Más grande para mayor impacto */
            margin-top: 20px;
            color: #FFD700;
            text-shadow: 2px 4px 8px rgba(0, 0, 0, 0.7);
        }

        h2 {
            font-size: 2.2em;
            margin-bottom: 20px;
            color: #F5F5F5;
            text-shadow: 1px 3px 6px rgba(0, 0, 0, 0.5);
        }

        p {
            font-size: 1.15em;
            line-height: 1.6;
            max-width: 800px;
            color: #333333; /* Texto en gris oscuro */
            padding: 0 20px;
            text-shadow: 1px 2px 5px rgba(0, 0, 0, 0.4);
            margin-bottom: 40px;
        }

        /* Pie de página */
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 10px 0;
            color: #FEFEFE;
            font-size: 0.9em;
            text-align: center;
            letter-spacing: 0.5px;
            box-shadow: 0px -4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <img id="logo" src="admin_assets/img/" alt="">
        <div class="top-bar">
            <a href="/login" class="button">Login</a>
            <a href="/register" class="button">Register</a>
        </div>
    </header>

    <main>
        <h1>Bienvenido Usuario</h1>
        <h2>Explora el monitoreo de motores desde diversos nodos</h2>
        <p>Descubre información detallada sobre los cambios de temperatura, corriente y vibración en diferentes ubicaciones
        de la sala de motores.<br>Nuestro avanzado sistema de monitoreo te proporciona datos precisos y útiles para comprender mejor el estado de estos motores y prevenir posibles fallas.</p>
    </main>

    <footer>
        UNSA © Control de Valores de Medición de Motores 2024
    </footer>
</body>
</html>

