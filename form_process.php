<?php

if(isset($_POST ['submit']) && isset($_POST ['username']) && isset($_POST ['password'])){
    echo "Hello" . "<br>";
$name = $_POST ['username'];
$passw = $_POST ['password'];
$names = ["Edwin", "John", "Troll", "Donald", "Wladimir"]; 
$min = 3;
$max = 10;
    
if(strlen($name) < $min){
    echo "Username is too short, it has to be longer than 3 characters and shorter than 10";
}
    
if (strlen($name) > $max){
    echo "Username is too long, it has to be longer than 3 characters and shorter than 10";
}
    
if(!in_array($name, $names)){
    echo "<br>" . "Sorry, you are not allowed to come here.";
} else {
    echo "Welcome";
}

    //echo "Here's your name " . $name . ", hi." . "<br>";
    //echo "And your password is " . $passw . " be aware of it.";
}
    
?>
