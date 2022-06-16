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

    



?>