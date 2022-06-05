<?php
require_once __DIR__ . "/GetConnection.php";
$connection = getConnection();

$username = "deeva";
$password = "rahasia";

$sql = "INSERT INTO admin(username, password) VALUES(?, ?)";
$statement = $connection->prepare($sql);
$statement->bindParam(1, $username);
$statement->bindParam(2, $password);
$statement->execute();

$connection = null;