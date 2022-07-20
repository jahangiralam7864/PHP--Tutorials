<?php
    $names = array(
        "jahangir alam",
        "monirul islam",
        "jony",
        "rofiq",
        "rafi uddin"
    );

    echo count($names);
    // result : 5
    echo "<br>";

    for ($i=0; $i < count($names); $i++) { 
        echo $names[$i] . "<br>";
        // result : jahangir alam  
        //          monirul islam
        //          jony
        //          rofiq
        //          rafi uddin
    }
    // array include test
    $names_print = implode(", ", $names);
    echo $names_print;
    echo "<br>";
    // Most of the people of our country don't know accurate english
    
?>