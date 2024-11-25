
<?php
session_start();
if(isset($_POST["submit"])){
$username = trim($_POST["username"]);
$email = trim($_POST["email"]);
$gender = trim($_POST["gender"]);
$blood = trim($_POST["blood"]);
$dob1 = trim($_POST["dob"]);
$dob = date('d-m-Y', strtotime($dob1));
$password = trim($_POST["password"]);
$confirm_password = trim($_POST["confirm_password"]);

if(empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($gender) || empty($blood) || empty($dob)){
    echo "Empty input field!";
}
else if( $password !== $confirm_password){
    echo "Please confirm your password!";
}
else{
    $a_array = ['username' => $username, 'password' => $password, 'email'=>$email, 'gender'=>$gender, 'dob'=>$dob, 'blood'=>$blood];
    $_SESSION = $a_array;
    header("location:login.html");
}

}
else{
    header("location:Registration_page.html");
}


?>
