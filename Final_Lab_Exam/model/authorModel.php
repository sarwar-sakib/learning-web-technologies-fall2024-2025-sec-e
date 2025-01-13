<?php
function get_connection(){

    $conn = mysqli_connect("127.0.0.1", "root", "", "blog_mgt" );
    return $conn;
}

function add_author($user_name, $author_name, $contact_no, $password)
{
    $conn = get_connection();
    $sql = "insert into authors values ('$user_name', '$author_name', '$contact_no', '$password')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function author_login($user_name, $password){
    $conn = get_connection();
    $sql = "select * from authors where user_name = '{$user_name}' and password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        return true;
    }
    else{
        return false;
    }
}

function show_authors(){
    $conn = get_connection();
    $sql = "select * from authors";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function author_info($user_name){
    $conn = get_connection();
    $sql = "select * from authors where user_name = '$user_name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row; 
}

function update_author_info($old_user_name, $new_author_name, $new_contact_no, $new_password){
    $conn = get_connection();
    $sql = "update authors set author_name = '$new_author_name', contact_no = '$new_contact_no', password='$new_password' where user_name = '$old_user_name'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function delete_author($user_name){
    $conn = get_connection();
    $sql = "delete from authors where user_name = '$user_name'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

?>
