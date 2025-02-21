<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $uploadDir = '../uploads/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo json_encode(["status" => "success", "message" => "Файл завантажено!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Помилка завантаження"]);
    }
}
?>