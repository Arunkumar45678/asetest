<?php
$host = 'localhost';
$db_name = 'simple_app';
$username = 'your_db_user';
$password = 'your_db_password';
try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
    exit;
}
?>