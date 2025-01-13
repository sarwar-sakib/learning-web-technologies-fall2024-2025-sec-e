<?php
require_once("../model/authorModel.php");
$user_name = $_REQUEST['user_name'];

$result = delete_author($user_name);

if ($result) {
    echo "<script>
            alert('Delete successful');
            window.location.href = '../view/authorList.php';
          </script>";
} else {
    echo "<script>
            alert('Failed to Delete user');
          </script>";
}
?>