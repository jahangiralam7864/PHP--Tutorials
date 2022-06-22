<!--php loop tutorials  -->
<?php
    for ($x = 1; $x < 10; $x++) { 
        echo $x . "<br>";
    }
    echo "Out site";
    // result: 1-9 pojonto 10 ar soto.

    // Even Number Program
    for ($i=0; $i < 20; $i += 2) { 
        echo $i. "<br>";
    } 

    // Odd Number Program
    for ($x=1; $x < 10; $x += 2) { 
        if ($x % 1 == 0) {
            echo $x . "<br>";
        }
    }