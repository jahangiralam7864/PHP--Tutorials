<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition check</title>
</head>
<body>
     <?php
        // amra akhon and oparator check korbo
        $a = true;
        $b = true;
        var_dump($a and $b);
        // return true;
        echo "<br>";

        $x = true;
        $y = false;
        var_dump($x and $y);
        // return false;
        echo "<br>";

        $m = true;
        $n = false;
        var_dump($m or $n);
        // result true;
        echo "<br>";

        $m = true;
        $n = false;
        var_dump($m || $n);
        // result true;
        echo "<br>";

        $m = true;
        $n = false;
        var_dump($m xor $n);
        // result true;
        echo "<br>";

     ?>
</body>
</html>