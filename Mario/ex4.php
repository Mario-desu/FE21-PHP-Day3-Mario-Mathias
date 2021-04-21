<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Create a PHP program that iterates the integers from 1 to 100. For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that are multiples of both three and five print "Full-Stack".
e.g. 
1
2
Back-End
4
Front-End
Back-End
7
8
Back-End
Front-End
11
Back-End
13
14
Full-Stack
16
17
Back-End
19
Front-End
etc. -->


<?php

function iterateInt() {
    for($i = 0; $i <=100; $i++){
        if ($i%3 == 0 && $i%5 == 0) 
            echo "<div style=color:green>Full-Stack</div>";

        else if ($i % 5 == 0)          
            echo "<div style=color:blue>Front-End</div>";

        else if ($i % 3 == 0)
            echo "<div style=color:red>Back-End</div>";

        else 
            echo "$i<br>";
        

    }
}

iterateInt();



?>



</body>
</html>