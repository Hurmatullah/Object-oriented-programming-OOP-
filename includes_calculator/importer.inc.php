<?php

spl_autoload_register('myAutoLoader');


function myAutoLoader($name)
{
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes_calculator') !== false) {
        $path = "../class_calculator/";
    } else {
        $path = 'class_calculator';
    }

    $extension = ".class.php";
    $full_path = $path . $name . $extension;

    require_once $full_path;
}
