<?php

	
class ParentClass{


	// properties or methods

	private $name = "Hurmat";
	private $fatherName = "Hamed";
	private $suject = "Mathmatic";

}


class ChildClass{

 // Private access it means that you can only access it inside of class not anywhere else
 // Protected access modifier is that you can only access it in inside of class or another class that extends that class as well.


	
  private function owner(){

  	$a = "this is a simple text";

  	return $a;

  }



}





?>




