<?php
require "./connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $connection->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: ./index.php"); // Change this to your users list page
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

?>