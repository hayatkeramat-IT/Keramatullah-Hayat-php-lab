<?php
//part A : I create a class called student and object 
// the sayhello() function displays a simple message.

 
class Student 
{
    public $name;
    public $studentId;
    public $department;

    function sayHello()
    {
        echo "hello! i am a student.<br>";
    }

    //part B:  the constructor receives three properties or values
    //$this is used to store these values inside the object

    function __construct($name, $studentId, $departmet)
    {

        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }
    
    // this function or method displays all student information.
    function showInfo()
    {
        echo "name:" . $this->name . "<br>";
        echo "studentId:" . $this->studentId . "<br>";
        echo "department:" . $this->department . "<br>";
    }
 }
   ///  part A create the first object called student1 from the student class.
 $student1 = new student(
    "ahmad",
    1001,
    "computer science"
 );
       //call the sayHello() function.
 $student1->sayHello();
    // display ahmad's info.
 $student1->showInfo();
   //part C create another object
   // i create an object called student2 using the student class.
 
 $student2 = new student(
    "sara",
    1002,
    "information system"
 );
   // call the showInfo() function to display sara's info.
 $student2->showInfo();
?>    