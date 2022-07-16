<?php

class Base
{
    public $name;
    public $lastName;
    public $subject;

    public static $newSubject = "Mathmatic";

    public function __construct($name, $lastName, $subject)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->subject = $subject;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public static function setSubject(string $newValue)
    {
        self::$newSubject = $newValue;
    }
}
