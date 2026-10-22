<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tienda virtual</title>

    <style>
        /* Configuración general */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Encabezado */
        header {
            background-color: #222;
            color: white;
            padding: 25px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 10px;
            font-size: 32px;
        }

        header p {
            margin: 0;
            font-size: 16px;
        }

        /* Barra de navegación */
        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        nav a {
            display: inline-block;
            color: white;
            text-decoration: none;
            margin: 5px 15px;
            font-size: 16px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #00bfff;
        }

        /* Contenido principal */
        main {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
            min-height: 300px;
        }

        /* Sección de bienvenida */
        .bienvenida {
            background-color: white;
            padding: 50px 30px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .bienvenida h2 {
            margin-top: 0;
            font-size: 28px;
            color: #222;
        }

        .bienvenida p {
            font-size: 18px;
            line-height: 1.6;
        }

        /* Botón */
        .boton {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .boton:hover {
            background-color: #0056b3;
        }

        /* Pie de página */
        footer {
            margin-top: 50px;
            padding: 20px;
            text-align: center;
            background-color: #222;
            color: white;
        }

        footer p {
            margin: 0;
        }

        /* Adaptación para celulares */
        @media (max-width: 600px) {
            header h1 {
                font-size: 26px;
            }

            nav a {
                margin: 8px;
                font-size: 14px;
            }

            main {
                width: 92%;
                margin: 25px auto;
            }

            .bienvenida {
                padding: 35px 20px;
            }

            .bienvenida h2 {
                font-size: 23px;
            }

            .bienvenida p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Tienda virtual</h1>
        <p>Tu tienda en línea</p>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="#">Productos</a>
        <a href="#">Nosotros</a>
        <a href="#">Contacto</a>
    </nav>

    <main>
        <section class="bienvenida">
            <h2>¡Bienvenido a nuestra tienda!</h2>

            <p>
                Encuentra los mejores productos en un solo lugar.
            </p>

            <a href="/productos" class="boton">
                Ver productos
            </a>
        </section>
    </main>