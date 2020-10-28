function validate_login_form() {
    var error = 0;
    
    var email = document.forms["loginForm"]["email"].value;
    document.getElementById('email_error').innerHTML = '';
    if (email == null || email == "") {
        error++;
        document.getElementById('email_error').innerHTML = 'Please enter your email';
    }
    else if(!email_is_valid(email)){
        error++;
        document.getElementById('email_invalid').innerHTML = 'Please enter a valid email';
    }

    var password = document.forms["loginForm"]["password"].value;
    document.getElementById('password_error').innerHTML = '';
    if (password == null || password == "") {
        error++;
        document.getElementById('password_error').innerHTML = 'Please enter your password';
    }

    if (error > 0) {
        return false;
    }
    return true;
}
function validate_register_form() {
    var error = 0;
    var username = document.forms["registerForm"]["username"].value;
    document.getElementById('username_error').innerHTML = '';
    if (username == null || username == "") {
        error++;
        document.getElementById('username_error').innerHTML = 'Please enter your username';
    }

    var email = document.forms["registerForm"]["email"].value;
    document.getElementById('email_error').innerHTML = '';
    if (email == null || email == "") {
        error++;
        document.getElementById('email_error').innerHTML = 'Please enter your email';
    }
    else if(!email_is_valid(email)){
        error++;
        document.getElementById('email_invalid').innerHTML = 'Please enter a valid email';
    }

    var password = document.forms["registerForm"]["password"].value;
    document.getElementById('password_error').innerHTML = '';
    if (password == null || password == "") {
        error++;
        document.getElementById('password_error').innerHTML = 'Please enter your password';
    }

    if (error > 0) {
        return false;
    }
    return true;
}

function email_is_valid(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}
