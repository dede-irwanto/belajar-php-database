<?php
$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "Kotamobagu@92";
try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database" . PHP_EOL;

    //    menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Gagal terkoneksi ke database MySQL : " . $exception->getMessage() . PHP_EOL;
}