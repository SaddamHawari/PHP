<?php

// What is class and instance?
require_once "Person.php";
require_once "Student.php";

$student=new Student("Saddam",'Hawari',1234);
echo '<pre>';
var_dump($student);
echo '</pre>';


// $p = new Person("Saddam","Hawari");
// $p->setAge(21);
// // $p->name='Saddam';
// // $p->surname='Hussain';
// echo '<pre>';
// var_dump($p);
// echo '</pre>';
// echo $p->getAge();

// // echo $p->name;

// $p2 = new Person('Bikash','Yadav');
// // $p2->name='Bikash';
// // $p2->surname='Yadav';
// echo '<pre>';
// var_dump($p2);
// echo '</pre>';
// echo person::$counter;
