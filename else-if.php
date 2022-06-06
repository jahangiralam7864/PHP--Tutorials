<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Else-if</title>
</head>
<body>
    <?php
        $age = 20;

        if ($age > 20) {
            echo "Hi, You are an adult !";
        }elseif ($age < 20) {
            echo " I am right now"; 
        }else{
            echo "Hello Bangladesh";
        }
        echo "<br>";

        // str word count check
        $para = "amar name jahangir alam form ullapara";
        echo str_word_count($para);
        // result 6 word

        // kono content k biporit pas theke print korty amra strrev use korbo
        $names = "My name is jahangir alam";
        echo strrev($names);
// result : mala rignahaj si eman yM
    ?>
</body>
</html>