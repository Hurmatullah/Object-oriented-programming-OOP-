<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $path = "classes/";
    $extension = ".class.php";
    $full_path = $path . $className . $extension;

    if (!file_exists($full_path)) {

        return "There is some typo problem in your classes";
    }

    include_once $full_path;
}
