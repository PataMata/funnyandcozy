<?php
// Connects to my Database
$servername = "den1.mysql6.gear.host";
$username = "funnyandcozy1";
$password = "Tl9NR_5u_30v";

$conn = mysql_connect($servername, $username, $password) or die(mysql_error());
mysql_select_db("Database_Name") or die(mysql_error());

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?> 