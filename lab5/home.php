<?php
session_start();
if($_SESSION['status'] == true){
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Page</title>
</head>
<body>
    <html>
    <head>
        <title>
            Registration Form
        </title>
        <body>
                <table align="center">
                    <tr>
                        <td>
                            <form action="regcheck.php" method="post">
                            <fieldset>
                                <legend><b>Registration</b></legend>
                                <table>
                    <tr>
                    <td colspan="2" align="center"><h3>User Profile</h3></td>
                    </tr>
                    <tr>
                    <td width="90">Name</td>
                    <td colspan="1">
                        : <?php echo $_SESSION["username"] ?> 
                    </td>
                    </tr>
                    <tr>
                    <td>Email</td>
                    <td>: <?php echo $_SESSION["email"] ?> </td>
                    </tr>

                    <tr>
                    <td>Gender</td>
                    <td>
                    : <?php echo $_SESSION["gender"] ?> 
                    </td>
                    </tr>

                    <tr>
                    <td>Date of Birth</td>
                    <td>: <?php echo $_SESSION["dob"] ?> 
                    </tr>
                    <tr>
                    <td>Blood Group</td>
                    <td>
                    : <?php echo $_SESSION["blood"] ?> 
                    </td>
                    </tr>


                    <td colspan ="3" align = "center">Close Session?</td>
                    </tr>
                    <tr><td colspan ="3" align = "center"><a href ="logout.php"> Logout</a></td><br></tr>
                </table>
                            
                        </fieldset>
                       </form>
                    </td>
                </tr>
            </table>
        </body>
    </head>
</html>
     
</body>
</html>
<?php
}
else{
    header("location:login.html");
}
?>