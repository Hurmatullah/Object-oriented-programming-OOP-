<?php


class Employee
{

    public $name;
    public $lastName;
    public $salary;

    public static $clothes = "blue";

    public function __construct($name, $lastName, $salary)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public static function setNewClothes($newClothes)
    {
        self::$clothes = $newClothes;
    }
}
