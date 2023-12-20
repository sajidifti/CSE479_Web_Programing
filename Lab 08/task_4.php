<?php

echo "<h1>CSE479 - Lab 8</h1><br><br>
<a href=\"task_1.php\" target=\"blank\">Task 1</a>
<a href=\"task_2.php\" target=\"blank\">Task 2</a>
<a href=\"task_3.php\" target=\"blank\">Task 3</a>
<a href=\"task_4.php\" target=\"blank\">Task 4</a>
<a href=\"task_5.php\" target=\"blank\">Task 5</a>
<a href=\"task_6.php\" target=\"blank\">Task 6</a>";

echo "<h1>Task 4</h1><br><br>";

class Circle
{
    private $radius;
    private $PI = 3.1416;

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getCircumference()
    {
        $circumference = 2 * $this->PI * $this->radius;
        return $circumference;
    }

    public function getArea()
    {
        $area = $this->PI * $this->radius * $this->radius;
        return $area;
    }
}

$circle = new Circle();
$circle->setRadius(5);

$circumference = $circle->getCircumference();
$area = $circle->getArea();

echo "Circle Radius = {$circle->getRadius()}<br>";
echo "Circumference = {$circumference}<br>";
echo "Area = {$area}<br>";


?>