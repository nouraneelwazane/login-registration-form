<?php
require_once "../Helper/database_connection.php";

if(!isset($_POST['login_form_redirect']) || $_POST['login_form_redirect']!="true")
{
    header('Location: ../../View/error.php/');
    exit;
}

$email=$_POST['email'];
$password=$_POST['password'];

$username=check_if_user_exists($email,$password);

if($username)
{
    $_SESSION['username']=$username;
}
else
{
    $_SESSION['username']=NULL;
}

$_SESSION['controller_redirect']="true";
header('Location: ../View/welcome.php/');
?>