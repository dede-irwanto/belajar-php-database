<?php
require_once __DIR__ . "/GetConnection.php";
$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@test.com','Hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@test.com','Hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@test.com','Hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@test.com','Hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('budi@test.com','Hi')");
$connection->rollBack();

$connection = null;