<?php

    $name = "amar sonar bangla";
    echo substr($name, 0, 5);
    // result:amar
    echo "<br>";
    var_dump(substr($name, 0, 5));
    // result:string(5) "amar "
    echo "<br>";
    
    $myName = "jahangir";
    var_dump(strstr($myName, "alam"));
    echo "<br>";
    
    if (! strstr($myName, "rafi uddin")) {
        echo "Sorry, Name doesn't match";
    }else {
        echo " You are right now";
    }

    echo "<br>";

    $strpos = "jahangi  alam joy";
    var_dump(strpos($strpos, "alam"));
    echo "<br>";
    // result : int (9)
    
    $stripos = "My name is jahangir alam";
    var_dump(strpos($stripos, "Jahangir"));
    echo "<br>";
    // result : bool(false);

    printf("Welcome %s. And you are good..",$name);
    // result: Welcome amar sonar bangla. And you are good..
    echo "<br>";


    $country ="I love my country in my bangladesh";
    $test = sprintf("Welcome %s. And you good..", $country);
    echo $test;

?>