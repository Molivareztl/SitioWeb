<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$data = json_decode(file_get_contents('php://input'), true);

$nombre = trim($data['nombre'] ?? '');
$score = intval($data['score'] ?? 0);

if (empty($nombre)) {
    echo json_encode(['success' => false, 'message' => 'Nombre requerido']);
    exit;
}

// Conexión a TU base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ScoreGame2";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Verificar si el nombre ya existe
    $stmtCheck = $conn->prepare("SELECT COUNT(*) as count FROM puntajes WHERE nombre = :nombre");
    $stmtCheck->bindParam(':nombre', $nombre);
    $stmtCheck->execute();
    $result = $stmtCheck->fetch(PDO::FETCH_ASSOC);
    
    if ($result['count'] > 0) {
        echo json_encode(['success' => false, 'error' => 'nombre_existe', 'message' => 'El nombre ya existe']);
        exit;
    }
    
    // Insertar nuevo puntaje
    $stmt = $conn->prepare("INSERT INTO puntajes (nombre, score) VALUES (:nombre, :score)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':score', $score);
    $stmt->execute();
    
    echo json_encode(['success' => true, 'message' => 'Puntaje guardado exitosamente']);
    
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error de base de datos']);
}
?>