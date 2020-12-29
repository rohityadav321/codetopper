<?php
  
session_start();
if (isset($_GET['logout'])) {
    session_unset($_SESSION['user']);
    session_destroy();
    header("location: index.php");
    session_abort();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div id="brand">
                <h1><span class="highlight">code</span>topper</h1>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="login.php"><button>Login</button></a></li>
                    <li><a href="signup.php"><button>Sign Up</button></a> </li>
                </ul>
            </nav>
        </div>

    </header>
    <section class="section">
        <div  class="left">
            <div>
                <p>Test your coding knowledge by attempting quiz given here</p>
                <div class="sub">
                    <div  class="subleft">
                        <h3>For Student</h3>
                        <p>join now to test your coding knowledge</p>
                        <a href="login.php"><button>Login as Student</button></a>
                    </div>
                    <div class="subright">
                        <h3>For Institute</h3>
                        <p>join now to test your students coding knowledge</p>
                        <a href="ilogin.php"><button>Login as Institute</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="foot">
        <hr>
        <div>
            <h6>CodeTopper &copy; 2019</h6>
        </div>
    </footer>
</body>

</html>