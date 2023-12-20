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

<pre>3. Write a PHP function to change the following array's all values to upper or lower case.
Sample arrays :
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output :
Values are in lower case.
Array ( [A] => blue, [B] => green, [c] => red )
Values are in upper case.
Array ( [A] => BLUE, [B] => GREEN, [c] => RED )
</pre>
<br>
<br>

<?php
function toLowerCase($array)
{
    $keys = array_keys($array);
    $values = array_values($array);

    for ($j = 0; $j < count($values); $j++) {
        $chars = str_split($values[$j]);

        for ($i = 0; $i < count($chars); $i++) {
            $ascii = ord($chars[$i]);

            if ($ascii >= 65 && $ascii <= 90) {
                $ascii += 32;
            }

            $chars[$i] = chr($ascii);
        }

        $values[$j] = implode($chars);
    }

    $array = array_combine($keys, $values);

    echo "Values are in lower case.\n";
    print_r($array);
}


function toUpperCase($array)
{

    $keys = array_keys($array);
    $values = array_values($array);

    for ($j = 0; $j < count($values); $j++) {

        $chars = str_split($values[$j]);

        for ($i = 0; $i < count($chars); $i++) {

            $ascii = ord($chars[$i]);

            if ($ascii >= 97 && $ascii <= 122) {
                $ascii -= 32;
            }

            $chars[$i] = chr($ascii);
        }

        $values[$j] = implode($chars);
    }

    $array = array_combine($keys, $values);

    echo "Values are in upper case.\n";
    print_r($array);
}


$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');


toLowerCase($Color);
echo "<br>";
toUpperCase($Color);
?>