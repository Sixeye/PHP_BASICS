<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    function greeting($name){
    echo "Hello my friend " . $name . "<br>";
    };
    
    greeting("Christopher");
    
    function calculate ($number1, $number2){
        $sum = $number1 + $number2;
        echo $sum;
    };
    
    echo calculate(48,48);
    
    ?>
</body>

</html>
