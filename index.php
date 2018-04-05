<?php

$servername = "den1.mysql6.gear.host";
$username = "funnyandcozy1";
$password = "Tl9NR_5u_30v";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>


<!DOCTYPE html>
<html>
<head>
<title>Funny & Cozy</title>
</head>
<body>

<h1>Markus suger</h1>

</body>
</html>