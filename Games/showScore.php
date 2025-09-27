<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Characters/style.css" rel="stylesheet" type="text/css" /> 
    <title>Listado de Puntos</title>

    <style>

        body {

            font-family: Arial, sans-serif;

            background-image: url(https://i.ytimg.com/vi/pVqCQk7AIP0/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDJic6KVzMNMrAjymS06v2mUxXl8A);
            background-repeat:round;
            background-size: cover;
            display: flex;

            flex-direction: column;

            justify-content: flex-start; /* Alinea al inicio */

            align-items: center;

            min-height: 100vh;

            margin: 0;

            padding: 20px;

            box-sizing: border-box; /* Incluye padding en el tamaño total */

        }

        .container {
            
            line-height: 30px;
            font-family: arial,helvetica,sans-serif;
            text-align: justify;
            background-image: linear-gradient(#c4b8b1 0%,#f5e7de 3%,#f5e7de 97%,#c4b8b1 100%);
            color: black;
            width: 90%;
        }

        h2 {

            text-align: center;

            color: black ;

            margin-bottom: 25px;

        }

        table {

            width: 100%;

            border-collapse: collapse;

            margin-top: 20px;

        }

        th, td {
            
            border-radius: 8px;

            padding: 10px;

            text-align: left;

        }

        .link-ingreso {
            

            display: block;

            text-align: center;

            margin-top: 20px;

            color: #00ff0dff;

            text-decoration: none;

        }

        .link-ingreso:hover {

            text-decoration: underline;

        }

    </style>

</head>

<body>

    <div class="container">

        <h2 class="Font">Listado de puntajes</h2>

        <?php include 'score.php'; ?>

        <a href="../index.html" class="link-ingreso">Volver al Inicio</a>

    </div>

</body>

</html>