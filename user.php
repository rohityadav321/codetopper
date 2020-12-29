<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <?php if (isset($_SESSION['success'])) : ?>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    <?php endif ?>
    <?php if (isset($_SESSION['user'])) : ?>
        <title><?php echo $_SESSION['user']; ?>|codetopper</title>

</head>

<body>
    <header>
        <div class="head">
            <div id="brand">
                <h1><span class="highlight">code</span> topper</h1>
            </div>
            <div class="user">
                <nav class="nav">
                    <ul>
                        <li><a href="language.php">home</a></li>
                        <li> <a href="user.php"><?php echo $_SESSION['user']; ?></a></li>
                        <li><a href="index.php?logout=''">logout</a> </li>

                    <?php endif ?>
                    </ul>
                </nav>
            </div>

    </header>
    <section class="user">
        <div class="left" style="border-right:1px solid red;">
            <div>

                <form method="POST" action="image.php" enctype="multipart/form-data">
                    <input type="file" name="image">
                    <input type="submit" name="upload" value="Upload">
                </form>
                <?php 
                 include('fetch.php');
                $getname = $_GET[' name '];

                echo "< img src = fetch_image.php?name=" . $getname . " width=200 height=200 >";
                ?>

            </div>
            <h3><?php echo $_SESSION['user']; ?></h3>
        </div>
        <div class="info">
            <div class="clg"></div>
            <div class="work"></div>
            <div class="email"></div>
            <div class="phone"></div>

        </div>
    </section>

</body>

</html>