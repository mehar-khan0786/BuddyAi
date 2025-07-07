<?php
$host = "localhost";     // or 127.0.0.1
$port = "3306";          // Change if you use a different port
$username = "root";      // Your MySQL Workbench username
$password = "meharkhan";          // Your MySQL Workbench password
$database = "chatboot";    // Name of the database you want to connect to

$conn=new PDO("mysql:host=$host;dbname=chatboot",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


?>
