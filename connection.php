<?php
// Connects to my Database
$servername = "den1.mysql6.gear.host";
$username = "funnyandcozy1";
$password = "Tl9NR_5u_30v";

$conn = mysqli_connect($servername, $username, $password);
//mysql_select_db("funnyandcozy1") or die(mysql_error());

// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} else {
	//echo "DB Connection succesful";
}

ini_set('display_errors', 1);
?> 