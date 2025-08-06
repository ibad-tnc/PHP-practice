<?php
$serverName = "localhost";
$hostName = "root";
$password = "";

$conn = new mysqli($serverName, $hostName, $password);

if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}
echo "Connected Successfully!";

$conn->close();
?>