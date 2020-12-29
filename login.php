<?php
session_start();
 include("connect.php");
 include("log.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>codetopper</title>
</head>

<body>
    <section class="container">
        <form action="log.php" id="frm" method="POST">
            <div id="login">login </div>
            <input type="user" id="int" name="user" placeholder="username"><br>
            <input type="hidden" id="usererr">
            <input type="password" id="int" name="password" placeholder="password"><br>
            <input type="hidden" id="passerr">
            <input type="submit" id="button" name="login" value="login">
            <a href="#">forget password?</a>
            <p>New user?<br> <a href="signup.php">Signup here</a>
            </p>
            <div class="div">
                <div style="width:40%"; class="lin">
                    <hr>
                </div>
                <span style="width:20%" class="or">or</span>
                <div  style="width:40%"; class="rin">
                    <hr>
                </div>
            </div>

            <div>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google"></i></a>
                <a href=""><i class="fa fa-github"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
            </div>

        </form>
    </section>

</body>

</html>