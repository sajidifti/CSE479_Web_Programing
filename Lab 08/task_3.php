<?php

echo "<h1>CSE479 - Lab 8</h1><br><br>
<a href=\"task_1.php\" target=\"blank\">Task 1</a>
<a href=\"task_2.php\" target=\"blank\">Task 2</a>
<a href=\"task_3.php\" target=\"blank\">Task 3</a>
<a href=\"task_4.php\" target=\"blank\">Task 4</a>
<a href=\"task_5.php\" target=\"blank\">Task 5</a>
<a href=\"task_6.php\" target=\"blank\">Task 6</a>";

echo "<h1>Task 3</h1><br><br>";

class Student
{
    private $name;
    private $id;
    private $cgpa;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCGPA($cgpa)
    {
        $this->cgpa = $cgpa;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCGPA()
    {
        return $this->cgpa;
    }
}


$student1 = new Student();
$student1->setName("Ifti");
$student1->setId("2020-1-60-060");
$student1->setCGPA(3.46);

$student2 = new Student();
$student2->setName("Tushar");
$student2->setId("2019-1-60-213");
$student2->setCGPA(3.33);


$totalCgpa = $student1->getCGPA() + $student2->getCGPA();
$averageCgpa = $totalCgpa / 2;

echo "<h3>Student 1:</h3><br>{$student1->getName()} ID: {$student1->getId()} CGPA: {$student1->getCGPA()}<br>";
echo "<h3>Student 2:</h3><br>{$student2->getName()} ID: {$student2->getId()} CGPA: {$student2->getCGPA()}<br>";
echo "<br><br><br>Average CGPA: {$averageCgpa}<br>";


?>