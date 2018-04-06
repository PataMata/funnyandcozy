<?php

$servername = "den1.mysql6.gear.host";
$username = "funnyandcozy1";
$password = "Tl9NR_5u_30v";

$conn = mysqli_connect($servername, $username, $password);

	$sql= "SELECT * FROM `Category`";
	$datasett = $conn->query($sql);

	ini_set('display_errors', 1);

	while($rad = mysqli_fetch_array($datasett)) {
	    if(!$rad){
	    	//echo "No input here";
    		printf("Error: %s\n", mysqli_error($con));
	    } else {
	    	echo $rad["name"];
	    }
	}


?>