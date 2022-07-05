<?php

$names = [
    "Md jahangir alam",
    "Md Rafi Uddin",
    "Md Abdul Hamid",
    "Md Tariqul Islam",
    "Md shofiqul Islam"
];
?>
<ol>
<?php
    foreach ($names as $parson) {
        echo "<li><br>" . $parson . "</br></li>";
    }

?>
</ol>
