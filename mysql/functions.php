<?php include "db.php";?>
<?php

function createRows(){
    global $connection;
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
    
    
    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("Query failed") . mysqli_error();
    } else {
        echo "Record created";
    }

}
}

function showAllData(){
    global $connection;
 $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("Query failed" . mysqli_error());
} 

 while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
     
 echo "<option value='$id'>$id</option>";
                        };
};


function updateTable(){
    if(isset($_POST['submit'])) {
global $connection;
    
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "UPDATE users SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = '$id' ";
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query failed" . mysqli_error($connection));
    } else {
        echo "Record updated";
    };
};
};

function deleteRows(){
    if(isset($_POST['submit'])) {
global $connection;
    
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "DELETE FROM users ";

$query .= "WHERE id = '$id' ";
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query failed" . mysqli_error($connection));
    } else {
        echo "Record deleted";
    }
}
};

?>
