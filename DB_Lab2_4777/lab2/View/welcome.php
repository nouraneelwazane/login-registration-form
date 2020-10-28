<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="../../Helper/style.css">
</head>
<style>

    h1 {
        background: white;
        width: 100%;
        font-size: 50px;
        font-family: "Century Gothic";
        text-align: center;
        position: absolute;
        left: 0;
        top: 35%;
    }
</style>

<body>
    <br><br><br>
    <?php
    echo "<title>Welcome</title>";
    session_start();
    if (!isset($_SESSION['controller_redirect']) || $_SESSION['controller_redirect'] != "true") {
        header('Location:../../View/error.php/');
        exit;
    }
    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
    } else {
        echo "<h1>Invalid Credentials</h1>";
    }
    ?>
</body>

</html>