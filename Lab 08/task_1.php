<?php

echo "<h1>CSE479 - Lab 8</h1><br><br>
<a href=\"task_1.php\" target=\"blank\">Task 1</a>
<a href=\"task_2.php\" target=\"blank\">Task 2</a>
<a href=\"task_3.php\" target=\"blank\">Task 3</a>
<a href=\"task_4.php\" target=\"blank\">Task 4</a>
<a href=\"task_5.php\" target=\"blank\">Task 5</a>
<a href=\"task_6.php\" target=\"blank\">Task 6</a>";

echo "<h1>Task 1</h1><br><br>";

class Rectangle {
    private $width, $height;

    public function setWidth($w) {
        $this->width = $w;
    }

    public function setHeight($h) {
        $this->height = $h;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function showArea() {
        $area = $this->width * $this->height;
        echo "Width = " . $this->width . " and Height = " . $this->height . "<br>Area = " . $area . "<br><br>";
    }
}


$rectangle1 = new Rectangle();
$rectangle1->setWidth(5);
$rectangle1->setHeight(10);

$rectangle2 = new Rectangle();
$rectangle2->setWidth(7);
$rectangle2->setHeight(3);


$rectangle1->showArea();
$rectangle2->showArea();



class RectangleConstructor {
    private $width, $height;

    public function __construct($w, $h) {
        $this->width = $w;
        $this->height = $h;
    }

    public function showArea() {
        $area = $this->width * $this->height;
        echo "Width = " . $this->width . " and Height = " . $this->height . "<br>Area = " . $area . "<br><br>";
    }
}

$rectangle3 = new RectangleConstructor(4, 8);
$rectangle4 = new RectangleConstructor(6, 12);

echo "<b>Using Constructor:</b><br><br>";

$rectangle3->showArea();
$rectangle4->showArea();


?>