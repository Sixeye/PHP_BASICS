<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    $number = ['Juanita','Maria','Jose'];
    echo $number[2]."<br>";
    
    $names = ["first_name" => 'Christopher', "Last-Name" => 'Samara' ];
    
    print_r($names);
    
    echo "<br>";
    echo $names['first_name'];
    echo "<br>";
    echo $names['first_name']. " " . $names['Last-Name'];
    ?>
</body>

</html>
