<?php
session_start();
require_once('../model/userModel.php');
if (!isset($_COOKIE['status'])) {
    header('location: login.html');
    exit;
}

$conn = getConnection();

// Fetch user data if 'id' is set
if (!empty($_REQUEST['id'])) {
    $id = ($_REQUEST['id']); // Sanitize ID as an integer

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "No user ID provided.";
    exit;
}


$conn->close();
?>

<html>
<head>
    <title>Edit Page</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="../model/update.php">
        Name: <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" /> <br>
        Password: <input type="text" name="password" value="<?= htmlspecialchars($user['password']) ?>" /><br>
        Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" /><br>
        <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>" />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>
