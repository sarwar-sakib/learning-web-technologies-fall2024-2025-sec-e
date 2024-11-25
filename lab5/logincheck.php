<?php
session_start();
if(isset($_POST['submit'])){
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $rememberme = trim($_POST["remember"]);

    if ($rememberme) {
        setcookie('remember_me', $username, time() +3600, "/");
    }

    if(empty($username) || empty($password)){
        echo "Empty username or password!";
    }
    else if($_SESSION["username"] === $username && $_SESSION["password"] === $password){
        $_SESSION['status'] = true;
        //setcookie('status', 'true', time()+3600, '/');
        header("location:home.php");
    }
    else{
        echo "Invalid Username and Password";
    }

}
else{
    header("location:login.html");
}

?>
