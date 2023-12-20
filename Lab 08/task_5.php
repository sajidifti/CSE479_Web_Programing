<?php

echo "<h1>CSE479 - Lab 8</h1><br><br>
<a href=\"task_1.php\" target=\"blank\">Task 1</a>
<a href=\"task_2.php\" target=\"blank\">Task 2</a>
<a href=\"task_3.php\" target=\"blank\">Task 3</a>
<a href=\"task_4.php\" target=\"blank\">Task 4</a>
<a href=\"task_5.php\" target=\"blank\">Task 5</a>
<a href=\"task_6.php\" target=\"blank\">Task 6</a>";

echo "<h1>Task 5</h1><br><br>";

class Box
{
    private $length;
    private $width;
    private $height;

    public function __construct($myLength, $myWidth, $myHeight)
    {
        $this->length = $myLength;
        $this->width = $myWidth;
        $this->height = $myHeight;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getArea()
    {
        // $area = 2 * (($this->length * $this->width) + ($this->length * $this->height) + ($this->width * $this->height));
        $area = $this->length * $this->width;
        return $area;
    }
}


$box = new Box(7, 5, 3);

echo "Box Length = {$box->getLength()}<br>";
echo "Box Width = {$box->getWidth()}<br>";
echo "Box Height = {$box->getHeight()}<br>";

$area = $box->getArea();
echo "<br>Box Area = {$area}<br>";



?>