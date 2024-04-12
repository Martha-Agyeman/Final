<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "sauna"; 


$conn = new mysqli("localhost", "root", "", "sauna");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


