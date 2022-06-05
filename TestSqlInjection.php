<?php
require_once __DIR__ . "/GetConnection.php";
$connection = getConnection();

$username = "admin'; #";
$password = "salah";
$sql = "SELECT * FROM admin WHERE username='$username' and password='$password';";

echo $sql . PHP_EOL;

$statement = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    //sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses login: " . $find_user . PHP_EOL;
} else {
    echo "Gagal login." . PHP_EOL;
}

$connection = null;