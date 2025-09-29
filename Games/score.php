<?php
// Configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tf_score";
// Make connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Verify connection
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// SQL Query
$sql = "SELECT user, score FROM score2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //HTML table
    echo "<table>";
    echo "<thead>";
    echo "<tr> <th>Usuarios</th> <th>Puntaje</th> </tr>";
    echo "</thead>";
    echo "<tbody>";
    // insert data
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["user"] . "</td>";
        echo "<td>" . $row["score"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No hay usuarios registrados aún.</p>";
}
$conn->close();

?>