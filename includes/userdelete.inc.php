<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";
        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        // submit query to the dB
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);


        $stmt->execute();

        // close off the connection
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        // to close off a script w/o connection, use exit(), if you have a connection, use die().
        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    //
    header("Location: ../index.php");
}