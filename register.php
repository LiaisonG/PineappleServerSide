<?php
if(session_status() == PHP_SESSION_NONE)
    session_start();
if(isset($_SESSION["loggedIn"]))
    exit("You are already logged in. You don't need to be here.");
?>

<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <form action="PHP/registerUser.php" method="POST">
            <input type="email" name="email" placeholder="E-Mail"/></br>
            <input type="text" name="username" placeholder="Username" /></br>
            <input type="password" name="password" placeholder="password"/></br>
            <input type="submit" name="submit" />
        </form>
        
    </body>
</html>
