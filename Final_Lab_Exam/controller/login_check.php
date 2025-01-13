<?php

require_once("../model/authorModel.php");
session_start();

if (!isset($_REQUEST['user_name']) || !isset($_REQUEST['password'])) {
    header("location:../view/signin.html?error=invalid_request");
    exit;
}

$user_name = trim($_REQUEST['user_name']);
$password = trim($_REQUEST['password']);

if (empty($user_name) || empty($password)) {
    header("location:../view/signin.html?error=invalid_request");
    exit;
}

$result = author_login($user_name, $password);
if ($result == true) {
    $_SESSION['user_name'] = $user_name;
    header("location:../view/home.php");
    exit;
} else {
    header("location:../view/signin.html?error=invalid_request");
    exit;
}

?>
