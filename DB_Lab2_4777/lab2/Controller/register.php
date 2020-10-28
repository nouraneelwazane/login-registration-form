<?php
require_once "../Helper/database_connection.php";

if(!isset($_POST['register_form_redirect']) || $_POST['register_form_redirect']!="true")
{
    header('Location: ../../View/error.php/');
    exit;
}

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$register_user=insert_new_user($username, $email, $password);

if($register_user)
{
    $_SESSION['username']=$username;
}
else
{
    $_SESSION['username']=NULL;
}

$_SESSION['controller_redirect']=true;
header('Location: ../View/welcome.php/');
