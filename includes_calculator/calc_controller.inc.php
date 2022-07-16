<?php

declare(strict_types=1);
include "importer.inc.php";


$operator = $_POST['operation'];
$number1 = $_POST['num1'];
$number2 = $_POST['num2'];


$object = new Calc($operator, (int)$number1, (int)$number2);

$result = $object->calculate();

try {
    if ($result) {
        echo $result;
    }
} catch (TypeError $e) {

    echo "Error!" . $e->getMessage();
}
