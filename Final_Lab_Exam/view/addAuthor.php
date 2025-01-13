<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Author</title>
    <script src="../asset/validation.js"></script>
</head>
<body>
    <h1>Add Author</h1>

    <form action="../controller/addAuthor.php" method="post" onsubmit="return validateForm()">
        
        Author Name:<br>
        <input type="text" name="author_name" id="author_name_id" onkeyup="check_author_name()"><br>
        <p id="author_name_val" style="display:none;color: red;">Author name cannot be null</p>

        Contact No:<br>
        <input type="text" name="contact_no" id="contact_no_id" onkeyup="check_contact_no()"><br>
        <p id="contact_no_val" style="display:none;color: red;">Contact cannot be null</p>

        Username: <br>
        <input type="text" name="user_name" id="user_name_id" onkeyup="check_username()"><br>
        <p id="user_name_val" style="display:none;color: red;">Username cannot be null</p>

        Password:<br>
        <input type="password" name="password" id="pass_id" onkeyup="check_password()"><br>
        <p id="password_val" style="display:none;color: red;">Password cannot be null</p>

        <br>
        <input type="submit" name="signup" value="Add">
        <input type="reset" name="reset" value="Reset"><br>

        <a href="home.php">Cancel</a>
    </form>

    
</body>
</html>
