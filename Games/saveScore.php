<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');
$data = json_decode(file_get_contents('php://input'), true);
$user = trim($data['user'] ?? '');
$score = intval($data['score'] ?? 0);
if (empty($user)) {
    echo json_encode(['success' => false, 'message' => 'Nombre requerido']);
    exit;
}
// Connection
$servername = "localhost";
$username = "phpmyadmin";
$password = "RedesInformaticas";
$dbname = "tf_score";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Verify existing names
    $stmtCheck = $conn->prepare("SELECT COUNT(*) as count FROM score2 WHERE user = :user");
    $stmtCheck->bindParam(':user', $user);
    $stmtCheck->execute();
    $result = $stmtCheck->fetch(PDO::FETCH_ASSOC);
    if ($result['count'] > 0) {
        echo json_encode(['success' => false, 'error' => 'user_existe', 'message' => 'El nombre ya existe']);
        exit;
    }
    // new score
    $stmt = $conn->prepare("INSERT INTO score2 (user, score) VALUES (:user, :score)");
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':score', $score);
    $stmt->execute();
    echo json_encode(['success' => true, 'message' => 'Puntaje guardado exitosamente']);
} catch(PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error de base de datos']);
}
?>