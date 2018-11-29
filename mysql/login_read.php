<?php
  
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection){
        echo "we are connected";
    } else {
        die("Connection has failed.");
    }
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("Query failed") . mysqli_error();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <div class="col-sm-3">

            <?php
        
            while($row= mysqli_fetch_assoc($result)){
                ?>
            <pre>
                <?php
                print_r($row);
                ?>
            </pre>
            <?php
            }
?>


        </div>
    </div>

</body>

</html>
