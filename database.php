<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cornejo_756";

$conn = new mysql($servername, $username, $password, $database);

if ($conn -> connect_error){
    die("Connection Failed!: . $conn->connect_error");
}
?>