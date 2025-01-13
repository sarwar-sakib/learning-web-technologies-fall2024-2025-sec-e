<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("location:signin.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
   
</head>
<body>

<h1>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>  
<nav>
    <a href="authorList.php">Author List</a> |
    <a href="addAuthor.php">Add Author</a> |
    <a href="../controller/logout.php">Logout</a>
</nav>
               
</body>
</html>
