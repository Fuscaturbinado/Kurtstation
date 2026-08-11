<?php include_once("") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/K.png">
    <title>Login to Kunst</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Playwrite+BE+VLG:wght@100..400&display=swap');
    </style>
    <link rel="stylesheet" href="/static/login.css">
</head>
<body class="backgroung">

    <form action="/database/loginsecsion.php">
    <section class = "section_login">
    <div class = "loginsection">
        <div class = "image_login">

        </div>

        <div class="login_fields">
            <label for = "username"> <b>Username</b> </label>
            <input type = "text" placeholder = "Username">
            <br>
            <label for = "password"> <b>Password</b> </label>
            <input type = "password" placeholder = "Password">
            <br>
        </div>
        <div class ="submit_sec">
            <button type="submit">Login</button>
    </div>
    </div>
    </section>
    </form>
    
</body>
</html>