<?php

// Student Name: Keramt Ullah Hayat
// Student ID: YOUR_STUDENT_ID
// Lab Assignment: PHP OOP Building Blocks


/*
 Task 1: 
 I created a Library class and defined a constant called MAX_BOOKS.
  The value is 3. I accessed the constant using Library::MAX_BOOKS
 
*/
class Library
{
    // This constant stores the fixed maximum number of books allowed.
    const MAX_BOOKS = 3;
}

// Display the class constant outside the class
echo "Maximum books allowed: " . Library::MAX_BOOKS;

echo "<br><br>";


/*
 Task 2: I created a static property called $count and a static method called addStudent().
 I called the method three times, so the final count is 3.
  I don't need to create an object because they are static

*/
class StudentCounter
{
    // Static property shared by the whole class
    public static $count = 0;

    // Static method to increase the student count by 1
    public static function addStudent()
    {
        self::$count++;
    }
}

// Call the static method three times without creating an object
StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

// Display the final value
echo "Total students: " . StudentCounter::$count;

echo "<br><br>";


/*
Task 3: I created an abstract class called Vehicle with an abstract method called start().
 Then I created Car and Bike classes that extend Vehicle and implement the start() method.

*/

abstract class Vehicle
{
    // Every child class must implement this method
    abstract public function start();
}


// Car class extends the abstract Vehicle class
class Car extends Vehicle
{
    public function start()
    {
        echo "Car engine started.";
    }
}


// Bike class extends the abstract Vehicle class
class Bike extends Vehicle
{
    public function start()
    {
        echo "Bike started.";
    }
}


// Create one Car object and one Bike object
$car = new Car();
$bike = new Bike();

// Call start() for each object
$car->start();

echo "<br>";

$bike->start();

?>