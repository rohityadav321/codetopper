<!--<?php
include('session.php');
?>-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="quiz.css">
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
     <!--       <div class="user">
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="error success">
                        <h3>
                            <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                ?>
                        </h3>
                    </div>
                <?php endif ?>-->
                <nav class="nav">
                   <!-- <?php if (isset($_SESSION['user'])) : ?>-->
                        <ul>
                            <li> <a href="user.php"><?php echo $_SESSION['user']; ?></a></li>
                            <li><a href="index.php?logout=''">logout</a> </li>
                        </ul>
                    <?php endif ?>

                </nav>
            </div>

    </header>
    <section class="section">
        <div  class="left">
            <div>
                <div>
                    <ol>
                        <li><a href="">level 1</a></li><br>
                        <li><a href="">level 2</a></li><br>
                        <li><a href="">level 3</a></li><br>
                        <li><a href="">level 4</a></li><br>
                        <li><a href="">level 5</a></li><br>
                        <li><a href="">level 6</a></li><br>
                        <li><a href="">level 7</a></li><br>
                        <li><a href="">level 8</a></li><br>
                        <li><a href="">level 9</a></li><br>
                        <li><a href="">level 10</a></li><br>
                    </ol>
                </div>
            </div>
        </div>
            <div id="media">
                <select name="level" id="level">
                    <option value="level 1">level 1</option>
                    <option value="level 1">level 1</option>
                    <option value="level 1">level 1</option>
                    <option value="level 1">level 1</option>
                    <option value="level 1">level 1</option>
                    <option value="level 1">level 1</option>
                    <option value="level 1">level 1</option>
                    <option value="level 1">level 1</option>
                    <option value="level 1">level 1</option>
                    <option value="level 1">level 1</option>
                </select>
            </div>
        <div  class="center">
            <div id="qui" class="quiz">
                <div class="question" id="question">
                </div>
                <ul id="ul">
                    <li class="op" id="op1" onclick="button(this)"></li><br>
                    <li class="op" id="op2" onclick="button(this)"></li><br>
                    <li class="op" id="op3" onclick="button(this)"></li><br>
                    <li class="op" id="op4" onclick="button(this)"></li><br>
                </ul>
            </div>
            <div class="scoreCard">
                <div class="next">
                    <button type="button" onclick="next()" id="button">Next</button>
                    <button type="button" onclick="previous()" id="pre">try again</button>

                </div>
                <div class="score-card">
                    Score : <span id="score">0</span>
                </div>
            </div>
        </div>
        </div>
        <script src="script.js"></script>

    </section>
    <footer class="foot">
        <hr>
        <div>
            <h6>CodeTopper &copy; 2019</h6>
        </div>
    </footer>
</body>

</html>