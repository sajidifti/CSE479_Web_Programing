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

4. Write a PHP program to sort a list in descending order of elements using Bubble sort.

<br>
<br>

<?php

function bubbleSort($arr)
{
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

$list = [5, 2, 8, 3, 1];
$sortedList = bubbleSort($list);

echo "Sorted list in descending order: ";
foreach ($sortedList as $element) {
    echo $element . " ";
}


?>