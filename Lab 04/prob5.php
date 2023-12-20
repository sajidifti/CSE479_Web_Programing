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
5. Create a script that displays 1-2_3#4_5-6#7-8_9#10 on one line. There will be no hyphen (-), underscore (_), and hash(#) at starting and ending position.
<br>
<br>
<?php

// Create a script that displays 1-2_3#4_5-6#7-8_9#10 on one line. There will be no hyphen (-), underscore (_), and hash(#) at starting and ending position.

$string = "1-2_3#4_5-6#7-8_9#10";
$output = "";

$length = strlen($string);
for ($i = 0; $i < $length; $i++) {
    $char = $string[$i];

    if ($char != "-" && $char != "_" && $char != "#") {
        $output .= $char;
    }
}

echo $output;


?>