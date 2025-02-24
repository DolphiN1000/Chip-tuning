<?php
// $host = "uashared37.twinservers.net:3306";
// $db = "chiptun5_chip-tuning-database";
// $user = "chiptun5_user_db";
// $pass = "123qwe!@#QWE";

$host = 'mysql'; // Ім'я контейнера в Docker
$db   = 'chip_tuning_db';
$user = 'user';
$pass = 'password';
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);
} catch (PDOException $e) {
    die(json_encode(["status" => "error", "message" => "Помилка підключення: " . $e->getMessage()]));
}
?>