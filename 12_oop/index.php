<?php

// What is class and instance

require_once "Person.php";
require_once "Student.php";

$student=new Student("kawan","idrees","1234");

echo '<pre>';
var_dump($student);
echo '</pre>';


// $p = new Person("kawan","Idrees");
// echo $p->setAge(22);
// $p2 = new Person("karwan","Idrees");
// echo $p2->setAge(25);
// echo $p->getAge()."<br>";

// echo Person::getCounter()   ;


// echo '<pre>';
// var_dump($p);
// echo '</pre>';




// Create Person class in Person.php

// Create instance of Person

// Using setter and getter