<?php
header('Content-Type: application/json'); // Відповідь у форматі JSON
header('Access-Control-Allow-Origin: *'); // Дозволяємо CORS

require '../db/db.php'; // Підключення до БД

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($email) || empty($password)) {
        echo json_encode(["status" => "error", "message" => "Заповніть всі поля"]);
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $hashedPassword]);

        echo json_encode(["status" => "success", "message" => "Користувач зареєстрований"]);
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Помилка: " . $e->getMessage()]);
    }
}
?>