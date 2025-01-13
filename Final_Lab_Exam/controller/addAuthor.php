<?php

require_once("../model/authorModel.php");  // Use the appropriate model for authors

$user_name = $_REQUEST['user_name'];
$author_name = $_REQUEST['author_name'];  // Updated to author_name
$contact_no = $_REQUEST['contact_no'];
$password = $_REQUEST['password'];

if (empty(trim($user_name)) || empty(trim($password)) || empty(trim($author_name))) {
    echo "Please fill all the input fields<br>";
} else {
    // Add author to the database
    $result = add_author($user_name, $author_name, $contact_no, $password);
    
    if ($result) {
        header("location:../view/home.php");  // Redirect to home page
    } else {
        echo "There was an error inserting the user.";
    }
}

?>
