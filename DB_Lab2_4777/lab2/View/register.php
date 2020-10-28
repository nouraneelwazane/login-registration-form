<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../Helper/style.css">
</head>

<body>
    <script src="../Helper/validate_form.js"></script>
    <form class="form" name="registerForm" action="../Controller/register.php" method="post" onsubmit="return validate_register_form()">
        <h1>REGISTER</h1>
        <div class="txt">
        <input type="text" name="username" placeholder="Username">
        <span class="error">
            <p id="username_error"></p>
        </span>
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
        <input class="btn" type="submit" value="REGISTER" name="register">
        <input type="hidden" name="register_form_redirect" value="true">
    </form>
</body>

</html>