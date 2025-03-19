<?php


// basics
class Person
{
    public $name;

    public function __construct($personName)
    {
        $this->name = $personName;
    }

    public function getName()
    {
        return "Hello " . $this->name . '!';
    }
}

$personOne =  new Person("pobi");
echo $personOne->getName();




//more about contsruct
class Car
{

    public $name, $model, $creationYear;

    public function __construct($carName, $carModel, $creationYear)
    {
        $this->name = $carName;
        $this->model = $carModel;
        $this->creationYear = $creationYear;
    }

    public function GetCarDetails()
    {

        return "Your Cars is " . $this->name . ". model of this car " . $this->model . ". This car is create on " . $this->creationYear . ".";
    }
}

$firstCarDetails = new Car("Toyota", "Hujuge", "19-03-2025");
$secondCarDetails = new Car("Lembergini", "Ajaira", "10-03-2022");
echo $firstCarDetails->getCarDetails();
echo "<br>";
echo $secondCarDetails->getCarDetails();
