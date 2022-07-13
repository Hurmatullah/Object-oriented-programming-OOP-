<?php

// Private access it means that you can only access it inside of class not anywhere else
// Protected access modifier is that you can only access it in inside of class or another class that extends that class as well.


class Mainclass
{
	public $firstName;
	public $lastName;
	public $subject;

	// Static properties it means that when we wanna add some static values for a property inside of class;

	public static $newGeneralSubject = "Mathmatic1";


	public function __construct($firstName, $lastName, $subject)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->subject = $subject;
	}

	public function setName($firstName)
	{
		$this->firstName = $firstName;
	}

	public function getName()
	{
		return $this->firstName;
	}

	public static function setNewValue($newValue)
	{
		self::$newGeneralSubject = $newValue;
	}
}
