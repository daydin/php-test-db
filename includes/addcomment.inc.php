<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $comment_text = $_POST["comment_text"];
//    $users_id = $_POST["users_id"];

    try {
        require_once "dbh.inc.php";
        $query_get_user_id = "SELECT * FROM users WHERE username=:username;";

        $stmt = $pdo->prepare($query_get_user_id);

        $stmt->bindParam(":username", $username);
        $stmt->execute();

        $users_data = $stmt->fetch(PDO::FETCH_ASSOC);
        $users_id = $users_data['id'];

        $query = "INSERT INTO comments (username, comment_text, users_id) VALUES (:username, :comment_text, :users_id);";
        // submit query to the dB
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":comment_text", $comment_text);
        $stmt->bindParam(":users_id", $users_id);

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