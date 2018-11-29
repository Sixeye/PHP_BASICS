<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    function addNumbers($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }
    
    $result = addNumbers(34, 64);
    
    echo $result . "<br>";
    
    $result = addNumbers(100, $result);
    
    echo $result . "<br>";;
    
    $result = addNumbers(900, $result);
    
    echo $result . "<br>";;
    
    ?>
</body>

</html>
