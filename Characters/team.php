<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Detallada</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .contenido {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <a href="../index.html">Volver a la página principal</a>

    <div class="contenido">
        <?php
        // Verifica si el parámetro 'info' existe en la URL
        if (isset($_GET['class'])) {
            $info = $_GET['class'];

            // Usa un 'switch' para mostrar el contenido basado en el valor del parámetro
            switch ($info) {
                case 'scout':
                    echo '<h1>Información del scout</h1>';
                    echo '<p>Este es nuestro producto A. Es un artículo de alta calidad diseñado para...</p>';
                    break;
                case 'soldier':
                    echo '<h1>Información del soldier</h1>';
                    echo '<p>Aquí están todos los detalles sobre el producto B, con sus especificaciones y beneficios...</p>';
                    break;
                default:
                    echo '<h1>Contenido no encontrado</h1>';
                    echo '<p>La opción seleccionada no existe. Por favor, regrese y elija una opción válida.</p>';
                    break;
            }
        } else {
            echo '<h1>Selección Inválida</h1>';
            echo '<p>No se ha especificado ninguna opción. Por favor, regrese y elija una imagen.</p>';
        }
        ?>
    </div>

</body>
</html>