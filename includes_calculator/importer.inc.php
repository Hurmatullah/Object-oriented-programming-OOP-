<?php

spl_autoload_register('myAutoLoader');


function myAutoLoder($name)
{
    $path = "class_calculator/";
    $extension = ".inc.php";
    $full_path = $path . $name . $extension;


    return $full_path;
}
