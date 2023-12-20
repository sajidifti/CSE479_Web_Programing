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

    2. Create a script to construct the following pattern, using a nested for loop. Take an input n= 5 and
produce like the following pattern.

<br>
<br>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nInput">Enter The Value of n:</label>
        <input type="number" name="nInput" id="nInput" required>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>

    <br>
    <br>

    <br>
    <br>


    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = $_POST['nInput'];

        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j < $i; $j++) {
                echo "&nbsp;&nbsp;";
            }

            for ($k = 1; $k <= (2 * ($n - $i) + 1); $k++) {
                echo "*";
            }

            echo "<br>";
        }

        for ($i = $n - 1; $i >= 1; $i--) {
            for ($j = 1; $j < $i; $j++) {
                echo "&nbsp;&nbsp;";
            }

            for ($k = 1; $k <= (2 * ($n - $i) + 1); $k++) {
                echo "*";
            }

            echo "<br>";
        }
    }

    ?>
</body>

</html>