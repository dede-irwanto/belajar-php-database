<?php
require_once __DIR__ . "/GetConnection.php";
$connection = getConnection();

$username = "runna";
$password = "rahasia";

$sql = "INSERT INTO admin(username, password) VALUES(?, ?)";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

$connection = null;