<?php
session_start();
define('DB_SERVER_NAME', 'localhost');
define('DB_USER_NAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'registration');

$conn = mysqli_connect(
    DB_SERVER_NAME,
    DB_USER_NAME,
    DB_PASSWORD,
    DB_NAME
);
if (!$conn) {
    die("An error occured, please try again later !");
}

function check_if_user_exists($email, $password)
{
    global $conn;
    $select_username_query = "select `username` from `user` where `email`='$email' and `password`='$password'";
    $select_username_query_result = mysqli_query($conn, $select_username_query);
    if (mysqli_num_rows($select_username_query_result) > 0) {
        $row = mysqli_fetch_assoc($select_username_query_result);
        return $row["username"];
    }
    return NULL;
}

function check_if_email_exists($email)
{
    global $conn;
    $select_email_query = "select `email` from `user` where `email`='$email'";
    $select_email_query_result = mysqli_query($conn, $select_email_query);
    if (mysqli_num_rows($select_email_query_result)>0) {
        return true;
    } else {
        return false;
    }
}

function insert_new_user($username, $email, $password)
{
    global $conn;
    if (check_if_email_exists($email))
        return false;
    $insert_new_user_query = "INSERT INTO `user`( `username`,`email`, `password`)
     VALUES ('$username','$email','$password')";
    $insert_new_user_query_result = mysqli_query($conn, $insert_new_user_query);
    if ($insert_new_user_query_result) {
        return true;
    } else {
        return false;
    }
}

//check_if_user_exists('test@test.com', 'testpassword');
//insert_new_user('hamada', 'hamada@hamada.com', 'hamadaaaa2563');
