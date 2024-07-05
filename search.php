<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";
        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        // submit query to the dB
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);

        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // close off the connection
        $pdo = null;
        $stmt = null;

        // to close off a script w/o connection, use exit(), if you have a connection, use die().


    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

?>

<html>

<head>

</head>

<body>

<h3>Search results:</h3>

<?php
if (empty($results)) {
    echo "<div>";
    echo "<p>There were no results.</p>";
    echo "</div>";

}else{
    foreach($results as $row){
        echo "<div>";
        echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
        echo "<p>" .htmlspecialchars($row["comment_text"]). "</p>";
        echo "<p>" .htmlspecialchars($row["created_at"]). "</p>";
        echo "</div>";
    }
}
?>

</body>

</html>


