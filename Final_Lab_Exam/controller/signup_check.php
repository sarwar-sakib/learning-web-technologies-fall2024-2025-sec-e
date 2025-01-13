<?php

require_once("../model/authorModel.php");

$user_name = trim($_REQUEST['user_name']);
$author_name = trim($_REQUEST['author_name']);
$contact_no = trim($_REQUEST['contact_no']);
$password = trim($_REQUEST['password']);

if (empty($user_name) || empty($password) || empty($author_name)) {
    echo "Please fill all the input fields<br>";
} else {
    $result = add_author($user_name, $author_name, $contact_no, $password);
    if ($result) {
        header("location:../view/signin.html");
    } else {
        echo "There was an error inserting the user.";
    }
}
?>
