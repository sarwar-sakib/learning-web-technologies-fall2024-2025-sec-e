<?php
require_once("../model/authorModel.php");  // Use the correct model for authors

$user_name = $_REQUEST['user_name'];
$author_name = $_REQUEST['author_name'];  // Changed from emp_name to author_name
$contact_no = $_REQUEST['contact_no'];
$password = $_REQUEST['password'];

if (empty(trim($user_name)) || empty(trim($password)) || empty(trim($author_name))) {
    echo "Please fill all the input fields<br>";
} else {
    // Update author information
    $result = update_author_info($user_name, $author_name, $contact_no, $password);

    if ($result) {
        echo "<script>
                alert('Update successful');
                window.location.href = '../view/authorList.php';  // Redirect to the author list page
              </script>";
    } else {
        echo "<script>
                alert('Failed to update user');
              </script>";
    }
}
?>
