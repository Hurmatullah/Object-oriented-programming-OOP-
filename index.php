<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP oop</title>
</head>

<body>

	<?php

	$object = new Base("Hurmatullah", "Karimi", "Computer Engineering");

	// echo $object->firstName . " " . $object->lastName . " " . $object->subject . "<br>";

	$hey = Base::setSubject("Physic");
	echo Base::$newSubject;

	?>


</body>

</html>