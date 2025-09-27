<?php

// Configuración de la base de datos

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "ScoreGame2";



// Crear conexión

$conn = new mysqli($servername, $username, $password, $dbname);



// Verificar conexión

if ($conn->connect_error) {

    die("Conexión fallida: " . $conn->connect_error);

}



// Consulta SQL para seleccionar todos los alumnos

$sql = "SELECT nombre, score FROM puntajes";

$result = $conn->query($sql);



if ($result->num_rows > 0) {

    // Si hay resultados, construir la tabla HTML
    echo "<table>";

    echo "<thead>";

    echo "<tr> <th>Nombre</th> <th>Puntaje</th> </tr>";

    echo "</thead>";

    echo "<tbody>";

    // Recorrer cada fila de resultados y mostrar los datos

    while($row = $result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>" . $row["nombre"] . "</td>";

        echo "<td>" . $row["score"] . "</td>";

        echo "</tr>";

    }

    echo "</tbody>";

    echo "</table>";

} else {

    echo "<p>No hay alumnos registrados aún.</p>";

}

// Cerrar conexión

$conn->close();

?>