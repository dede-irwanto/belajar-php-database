<?php
require_once __DIR__ . "/GetConnection.php";
$connection = getConnection();

$username = "deeva";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

if ($row = $statement->fetch()) {
    echo "Sukses login: " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;