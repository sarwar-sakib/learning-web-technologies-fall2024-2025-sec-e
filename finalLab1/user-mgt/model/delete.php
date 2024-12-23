<?php
session_start();
require_once('../model/userModel.php');
if (!isset($_COOKIE['status'])) {
    header('location: login.html');
    exit;
}

// Database connection
$conn = getConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id']; // Get the user ID from the URL

    // Delete Query
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("location: ../view/userlist.php"); // Redirect to user list after deletion
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID provided to delete.";
}

$conn->close();
?>
