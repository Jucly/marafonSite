<?php
$servername = "localhost";
$database = "marafon";
$username = "nomad";
$password = "changeme123";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $database);

// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

mysqli_close($conn);
?>