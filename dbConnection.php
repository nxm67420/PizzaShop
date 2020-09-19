<?php
$server = "localhost";
$user = "root";
$pwd = "";
$db = "pizzaShop";

$conn = mysqli_connect($server, $user, $pwd, $db);
if ($conn->connect_error) {
    die("Connection Failed");
} 
else {
    echo "<p style='color: aqua'> Successful Connection </p>";
}
