<?php
require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = "SELECT id, name, email FROM customers";
$statement = $connection->query($sql);

foreach ($statement as $row) {
    echo $id = $row["id"];
    echo $name = $row["name"];
    echo $email = $row["email"];

    echo "ID: " . $id . PHP_EOL;
    echo "Name: " . $name . PHP_EOL;
    echo "Email: " . $email . PHP_EOL;
}

$connection = null;