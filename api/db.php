<?php
$host = "localhost";
$user = "твій_юзер";
$pass = "твій_пароль";
$dbname = "твоя_база";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Помилка з'єднання: " . $conn->connect_error);
}
?>