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
Write a PHP script that creates the following table (use for loops).
1 2 3 4 5 6 7 8 9 10
2 4 6 8 101214161820
3 6 9 12151821242730
4 8 1216202428323640
5 101520253035404550
6 121824303642485460
7 142128354249566370
8 162432404856647280
9 182736455463728190
102030405060708090100
</pre>

<br>
<br>

<?php

echo "<table style=\"border: 1px solid black; border-collapse: collapse;\">";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr style=\"border: 1px solid black; border-collapse: collapse;\">";

    for ($j = 1; $j <= 10; $j++) {
        echo "<td  style=\"border: 1px solid black; border-collapse: collapse;\">" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";


?>