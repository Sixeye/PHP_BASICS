<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    function say_Something(){
        echo "Something like Hello teacher! <br>";
    };
    function hello_Teacher(){
        $name = "Edwin Diaz";
        echo say_Something () . " " . $name . "<br>";
    };
    
    function calculate ($a, $b){
        echo $a+$b . "<br>";
    };
    
    function init(){
        calculate(81,18);
        hello_Teacher();
    };
    
    init();
    
    
    
    
    ?>
</body>

</html>
