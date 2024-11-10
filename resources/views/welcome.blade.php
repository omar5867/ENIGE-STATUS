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
            padding-top: 150px;
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
            font-size: 5em;
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

        /* Cuadro para el párrafo */
        .info-box {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro con opacidad */
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            max-width: 800px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);
        }

        .info-box p {
            font-size: 1.15em;
            line-height: 1.6;
            color: #F5F5F5;
        }

        /* Galería de imágenes */
        .gallery {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            max-width: 1000px;
        }

        .gallery img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        /* Estilo del modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            max-width: 90%;
            max-height: 90%;
        }

        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #FFFFFF;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #FFDD00;
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
        <h1>Bienvenido</h1>
        <h2>Explora el monitoreo de motores desde diversos nodos</h2>

        <!-- Cuadro para el texto -->
        <div class="info-box">
            <p>Descubre información detallada sobre los cambios de temperatura, corriente y vibración en diferentes ubicaciones
            de la sala de motores. Nuestro avanzado sistema de monitoreo te proporciona datos precisos y útiles para comprender mejor el estado de estos motores y prevenir posibles fallas.</p>
        </div>

        <!-- Galería de dos imágenes -->
        <section class="gallery">
            <img src="admin_assets/img/HOTEL.png" alt="Descripción de imagen 1" onclick="openModal(this)">
            <img src="admin_assets/img/MOTORHOTEL.png" alt="Descripción de imagen 2" onclick="openModal(this)">
            
        </section>
    </main>

    <!-- Modal para ver imágenes en tamaño completo -->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImg">
    </div>

    <footer>
        UNSA © Control de Valores de Medición de Motores 2024
    </footer>

    <script>
        // Función para abrir el modal
        function openModal(img) {
            const modal = document.getElementById('myModal');
            const modalImg = document.getElementById('modalImg');
            modal.style.display = "flex";
            modalImg.src = img.src;
        }

        // Función para cerrar el modal
        function closeModal() {
            const modal = document.getElementById('myModal');
            modal.style.display = "none";
        }
    </script>
</body>
</html>




