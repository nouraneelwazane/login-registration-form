<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../Helper/style.css">
</head>

<body>
    <script src="../Helper/validate_form.js"></script>
    <form class="form" name="loginForm" action="../Controller/login.php" method="post" onsubmit="return validate_login_form()">
        <h1>LOGIN</h1>
        <div class="txt">
            <input type="text" name="email" placeholder="E-mail">
            <span class="error">
                <p id="email_error"></p>
            </span>
            <span class="error">
                <p id="email_invalid"></p>
            </span>
            <input type="password" name="password" placeholder="Password">
            <span class="error">
                <p id="password_error"></p><br><br>
            </span>
        </div>
        <input class="btn" type="submit" value="LOGIN" name="login">
        <input type="hidden" name="login_form_redirect" value="true">
    </form>
</body>

</html>