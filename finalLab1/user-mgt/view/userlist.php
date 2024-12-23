<?php
session_start();
require_once('../model/userModel.php');
if (!isset($_COOKIE['status'])) {
    header('location: login.html');
    exit;
}

// Database connection
$conn = getConnection();

// Fetch users from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

$users = $result->fetch_all(MYSQLI_ASSOC);
?>

<html lang="en">
<head>
    <title>Userlist</title>
</head>
<body>
    <h2>User List</h2>
    <a href="home.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>
    <br>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= htmlspecialchars($user['username']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td>
                <a href="edit.php?id=<?= $user['id'] ?>">EDIT</a> |
                <a href="../model/delete.php?id=<?= $user['id'] ?>">DELETE</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
