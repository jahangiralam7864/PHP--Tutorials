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

    }
?>