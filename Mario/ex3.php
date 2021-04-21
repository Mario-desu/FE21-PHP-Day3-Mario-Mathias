<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP. -->


<?php

    $randomArray = [ rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];

    function maxValue($randomArray) {
        $maxVal = max($randomArray);
        return $maxVal; 
    }

    $showmaxVal = maxValue($randomArray);
    echo "<h1>The maximum value is ". $showmaxVal . "!</h1>";
?>
    
</body>
</html>