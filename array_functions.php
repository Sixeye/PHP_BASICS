<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    $list = [354, 358, 465, 844, 388, 954 , 344, 3254, 211, 5522];
    
    echo max($list) .  "<br>";
    echo min($list) . "<br>";
    sort($list);
    echo print_r($list);
    
    ?>
</body>

</html>
