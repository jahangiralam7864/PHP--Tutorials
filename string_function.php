<?php
    // first word capital 
    $name = "jahangir alam joy jahangir";
    echo ucfirst($name);
    echo "<br>";
    // result : Jahangir alam joy jahangir

    $names = "jahanigr alam monirul rafi uddin";
    echo ucwords($names);
    echo "<br>";
    // result : Jahanigr Alam Monirul Rafi Uddin

    $name = "OUR PHP CLASS NO 8";
    echo lcfirst($name);
    echo "<br>";
    // result: oUR PHP CLASS NO 8

    $name = "OUR PHP CLASS NO 8";
    echo strtolower($name);
    echo "<br>";
    // result: our php class no 8

    $name = "OUR PHP CLASS NO 8";
    $name = strtolower($name);
    $name = str_replace(" ", "_", $name);
    echo "$name";
    echo "<br>";
    // result: our_php_class_no_8


?>
