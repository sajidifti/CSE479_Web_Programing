<?php

echo "<h1>CSE479 - Lab 8</h1><br><br>
<a href=\"task_1.php\" target=\"blank\">Task 1</a>
<a href=\"task_2.php\" target=\"blank\">Task 2</a>
<a href=\"task_3.php\" target=\"blank\">Task 3</a>
<a href=\"task_4.php\" target=\"blank\">Task 4</a>
<a href=\"task_5.php\" target=\"blank\">Task 5</a>
<a href=\"task_6.php\" target=\"blank\">Task 6</a>";

echo "<h1>Task 2</h1><br><br>";
class Calculator
{
    public $myValue;

    public function setValue($value)
    {
        $this->myValue = $value;
    }

    public function square()
    {
        $result = $this->myValue * $this->myValue;
        echo "Square of {$this->myValue} = {$result}<br>";
    }

    public function qube()
    {
        $result = $this->myValue * $this->myValue * $this->myValue;
        echo "Cube of {$this->myValue} = {$result}<br>";
    }
}


class CalculatorConstructor
{
    private $myValue;

    public function __construct($value)
    {
        $this->myValue = $value;
    }
    public function square()
    {
        $result = $this->myValue * $this->myValue;
        echo "Square of {$this->myValue} = {$result}<br>";
    }

    public function qube()
    {
        $result = $this->myValue * $this->myValue * $this->myValue;
        echo "Cube of {$this->myValue} = {$result}<br>";
    }
}


echo "<h3>Using setValue()</h3><br>";
$calculator = new Calculator();
$calculator->setValue(5);
$calculator->square();
$calculator->qube();


echo "<h3>Using __construct()</h3><br>";
$calculatorWithoutSetValue = new CalculatorConstructor(3);
$calculatorWithoutSetValue->square();
$calculatorWithoutSetValue->qube();



?>