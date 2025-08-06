<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$db = "mydb";

$conn = mysqli_connect($serverName, $userName, $password, $db);

if($conn){
    echo "";
} 
else{
    echo "Not Connected!";
}


// $sql = "CREATE DATABASE mydb";
// if($conn->query($sql) === TRUE){
//     echo "Database created successfully";
// }
// else {
//     echo "Error creating database : " . $conn->error;
// }
?>