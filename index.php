<?php

include "./includes/index.inc.php";

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

	$object = new ParentClass("Hurmatullah", "Karimi", "Computer Engineering");

	// echo $object->firstName . " " . $object->lastName . " " . $object->subject . "<br>";

	echo ParentClass::$generalSubject . "<br>";
	ParentClass::setGeneralSubject("Chemistry");
	echo ParentClass::$generalSubject;

	?>


</body>

</html>