<?php
session_start();
require_once('../model/userModel.php');
if (!isset($_COOKIE['status'])) {
    header('location: login.html');
    exit;
}

// Database connection
$conn = getConnection();

if (isset($_POST['submit'])) {
    $id = $_POST['id']; // User ID
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simple Update Query
    $sql = "UPDATE users SET username='$name', email='$email', password='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("location: ../view/userlist.php"); // Redirect to user list
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
