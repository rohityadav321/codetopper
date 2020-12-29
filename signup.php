<?php
session_start();
 include("connect.php");
 include("sign.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="signup.css">
    <title>codetopper</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <section class="container">
        <form action="sign.php" method="post" id="form" >
            <div id="signup">sign up</div>
            <input type="email" id="int" name="email" placeholder="enter your email"><br>
            <input type="hidden" id="mailerr">
            <input type="text" id="int" name="user" placeholder="enter your username"><br>
            <input type="hidden" id="usererr">
            <input type="password" id="int" name="password" placeholder="create password"><br>
            <input type="hidden" id="passerr">
            <input type="password" id="int" name="password2" placeholder="confirm password"><br>
            <input type="hidden" id="passerr2">
            <input type="submit" id="button" name="signup" value="signup">
            <p>Already have an account?<br> <a href="login.php">Login here</a>
            </p>
            <div class="div">
                <div style="width:40%" ; class="lin">
                    <hr>
                </div>
                <span style="width:20%" class="or">or</span>
                <div style="width:40%" ; class="rin">
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