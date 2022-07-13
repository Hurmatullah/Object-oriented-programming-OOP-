<?php

// Private access it means that you can only access it inside of class not anywhere else
// Protected access modifier is that you can only access it in inside of class or another class that extends that class as well.


class ParentClass
{
	public $firstName;
	public $lastName;
	public $subject;

	public function setName()
	{
		$this->firstName = "Hey this is me";
	}
}
