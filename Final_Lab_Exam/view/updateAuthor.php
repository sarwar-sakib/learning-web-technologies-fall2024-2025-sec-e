<?php
require_once('../model/authorModel.php'); 
$user_name = $_REQUEST['user_name'];
$author_info = author_info($user_name);  // Update to use the author function
$author_name = $author_info['author_name'];  // Updated to author_name
$contact_no = $author_info['contact_no'];
$password = $author_info['password'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Author</title>
    <script src="../asset/validation.js"></script>
</head>
<body>
    <h1>Update Author Information</h1>

<form action="../controller/updateAuthor.php" method="POST" onsubmit="return validateForm()">
    Username: 
    <input type="text" readonly value="<?php echo $user_name; ?>" name="user_name">
    <br>

    Author Name: 
    <input type="text" value="<?php echo $author_name; ?>" name="author_name" id="author_name_id" onkeyup="check_author_name()">
    <p id="author_name_val" style="display:none; color: red;">Author Name cannot be empty</p>
    <br>

    Contact No: 
    <input type="text" value="<?php echo $contact_no; ?>" name="contact_no" id="contact_no_id" onkeyup="check_contact_no()">
    <p id="contact_no_val" style="display:none; color: red;">Contact No cannot be empty</p>
    <br>

    Password: 
    <input type="password" value="<?php echo $password; ?>" name="password" id="pass_id" onkeyup="check_password()">
    <p id="password_val" style="display:none; color: red;">Password cannot be empty</p>
    <br>

    <input type="submit" name="update" value="Submit">
    <a href="authorList.php">Go Back</a>
</form>


</body>
</html>
