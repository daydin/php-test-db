<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
    try {
        require_once "dbh.inc.php";
        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

        // submit query to the dB
        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $pwd, $email]);

        // close off the connection
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        // to close off a script w/o connection, use exit(), if you have a connection, use die().
        die();

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
} else {
    //
    header("Location: ../index.php");
}