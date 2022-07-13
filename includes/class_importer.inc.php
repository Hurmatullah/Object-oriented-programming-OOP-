<?php

spl_autoload_register('myAutoLoad');

function myAutoLoad($className)
{
    $path = "classes/";
    $extension = ".class.php";
    $full_path = $path . $className . $extension;

    if (!file_exists($full_path)) {

        return "there might be some typo problem";
    }

    include_once $full_path;
}
