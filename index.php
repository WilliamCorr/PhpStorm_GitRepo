<!doctype html>
<html lang="en">
<head>
    <title>guessing game</title>
    <style>
        @import "/css/lottery.css";
    </style>
</head>
<body>
<h1> The Wonderful World of Number Guessing</h1>

<h2>Guess a number from 1 to 5: </h2>

<ul class="numberCircles">
    <li><a href="resultLose.php">1</a></li>
    <li><a href="resultWin.php" >2</a></li> <!-- the winning number -->
    <li><a href="resultLose.php">3</a></li>
    <li><a href="resultLose.php">4</a></li>
    <li><a href="resultLose.php">5</a></li>
    <li><a href="resultLose.php">6</a></li>
</ul>
<?php

//choose a random number instead of the hardcoded link above

$min = 1;
$max = 5;

$rightAnswer = rand($min, $max)


?>
</body>
</html>
