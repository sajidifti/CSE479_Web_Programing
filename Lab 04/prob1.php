<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sum of Prime Numbers</title>
</head>

<body>
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
    1. Write a PHP script that displays the sum of all numbers between 1000 and 3000 that are prime.
    <br>
    <br>
    <?php

    function isPrime($number)
    {
        if ($number < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }

    $lowerLimit = 1000;
    $upperLimit = 3000;
    $sum = 0;

    for ($num = $lowerLimit; $num <= $upperLimit; $num++) {
        if (isPrime($num)) {
            $sum += $num;
        }
    }

    ?>

    <h3>The sum of all numbers between 1000 and 3000 that are prime is
        <?php echo $sum ?>
    </h3>
</body>

</html>