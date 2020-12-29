<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="language.css">
    <title>Document</title>
    <script src="jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <?php if (isset($_SESSION['success'])) : ?>
                            <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                        <?php endif ?>
                        <?php if (isset($_SESSION['user'])) : ?>
                            <li> <a href="user.php"><?php echo $_SESSION['user']; ?></a></li>
                            <li><a href="index.php?logout=''">logout</a> </li>

                        <?php endif ?>
                    </ul>
                </nav>
            </div>

    </header>
    <!--
    <section class="container">
        <table class="table">
            <tr class="tr">
                <td>
                    <a href="c.php">
                        <h2>C</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>
                <td>
                    <a href="c++.php">
                        <h2>C++</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>
                <td>
                    <a href="python.php">
                        <h2>Python</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>


            </tr>
            <tr>
                <td>
                    <a href="#">
                        <h2>Java</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>
                <td>
                    <a href="#">
                        <h2>Javascript</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>
                <td>
                    <a href="#">
                        <h2>Php</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>


            </tr>
            <tr>
                <td>
                    <a href="sharp.php">
                        <h2>C#</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>
                <td>
                    <a href="#">
                        <h2>Sql</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>
                <td>
                    <a href="#">
                        <h2>Rust</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>


            </tr>
            <tr>
                <td>
                    <a href="#">
                        <h2>Ruby</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>
                <td>
                    <a href="#">
                        <h2>Swift</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>
                <td>
                    <a href="#">
                        <h2>Apptitude</h2>
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat aperiam culpa fuga amet
                            asperiores
                            ipsa laborum! Facilis fugiat iusto atque mollitia vitae, inventore rerum dolorum quos
                            commodi ipsum
                            provident neque animi aliquid officia ex. Ab nemo architecto delectus neque tempore.</p>
                    </a>
                </td>


            </tr>
        </table>
    </section>-->
    <section>
        <div>
            <p> <li style="list-style-type:disc;">  Select the area of your choice!</li> </p>
        </div>
        <div>
            <li style="list-style-type:decimal;" >Programming</li>
            <li style="list-style-type:decimal;" > Apptitude</li>
        </div>
    </section>
</body>

</html>