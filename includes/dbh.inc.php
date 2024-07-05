<?php

$dsn = "mysql:host=localhost;dbname=my_first_db";
$dbusername = "root";
$dbpassword = "root"; // "root" for Mac and "" for other OS

try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword); // now we have a dB object
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}