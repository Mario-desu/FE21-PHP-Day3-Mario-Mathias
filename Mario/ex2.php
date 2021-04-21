<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Exercise 2
Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element. -->


<?php

$numArray = [ 15, 24, 45, 23, 89, 9, 66, 56, 90, 33];


foreach($numArray AS $value){
    echo "$value<br>";
}

?>
    
</body>
</html>