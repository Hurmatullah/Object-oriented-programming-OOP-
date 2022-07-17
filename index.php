<?php

declare(strict_types=1);
include "includes/class_importer.inc.php";

?>
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

	try {
		$hey = Base::setSubject(2);
		echo Base::$newSubject;
	} catch (TypeError $e) {

		echo "Bro you made mistake!" . $e->getMessage();
	}

	?>


</body>

</html>