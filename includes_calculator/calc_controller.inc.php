<?php

declare(strict_types=1);
include "importer.inc.php";


$operator = $_POST['operation'];
$number1 = $_POST['num1'];
$number2 = $_POST['num2'];


$object = new Calc($operator, $number1, $number2);
