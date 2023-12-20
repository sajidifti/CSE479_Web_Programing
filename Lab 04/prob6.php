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

<pre>
6. Write a PHP script to extract text (within parenthesis) from a string.
Sample strings : 'The quick brown [dog].'
Expected Output : 'dog'
</pre>

<br>
<br>

<?php

$string = 'The quick brown [dog].';
$pattern = '/\[(.*?)\]/';

preg_match($pattern, $string, $matches);
$result = $matches[1];

echo $result;
?>