<?php
session_start();
header("Content-Type: application/json");
require_once "auth.php";

$data = json_decode(file_get_contents("php://input"), true);
$login = isset($data['login']) ? trim($data['login']) : '';
$password = isset($data['password']) ? trim($data['password']) : '';

if (login($login, $password)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => "Невірний логін або пароль."]);
}
exit;