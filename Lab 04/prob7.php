<nav>
    <a href="prob1.php">Problem 1</a>
    <a href="prob2.php">Problem 2</a>
    <a href="prob3.php">Problem 3</a>
    <a href="prob4.php">Problem 4</a>
    <a href="prob5.php">Problem 5</a>
    <a href="prob6.php">Problem 6</a>
    <a href="prob7.php">Problem 7</a>
    <a href="prob8.php">Problem 8</a>
</nav>
<br>
<br>

7. Write a PHP script to remove the special character from a string. Sample special character:
[!@#$%^&*-_=+\<>?/]

<br>
<br>

<?php

function removeSpecialCharacters($string)
{
    $pattern = '/[^a-zA-Z0-9\s]/';
    $string = preg_replace($pattern, '', $string);
    return $string;
}

$inputString = "Hello!@#$%^&* World";

$pattern = '/[^a-zA-Z0-9\s]/';

$cleanString = preg_replace($pattern, '', $inputString);

echo $cleanString;


?>