<?php

$servername = "den1.mysql6.gear.host";
$username = "funnyandcozy1";
$password = "Tl9NR_5u_30v";

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";




	if(isset($_POST["submit"])){
		$catName = $conn->real_escape_string($_POST["categoryName"]);
		//echo "<br /></br /></br /></br />".$tilkobling->real_escape_string($_POST["selectDel"]);
		$sql = sprintf("INSERT INTO `Category`(`name`) VALUES ('"+$catName+"')";
		$result = $conn->query($sql);

		if($result){
			echo "<br /><br /><br /><br /><br /><br /><br />Inserted";
		} else {
			echo "<br /><br /><br /><br /><br /><br /><br />Not inserted" + mysqli_connect_error();			
		}

		header('Location:items.php');//?id='.$tilkobling->insert_id);
	}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Funny & Cozy</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="style.css">

 </head>


 <body data-spy="scroll" data-target=".navbar-collapse">
 
 <div class="navbar navbar-default navbar-fixed-top">
 <div class="container">
 	 	 <div class="navbar-header">
 	 	 	 <button class="navbar-toggle" data-toggle="collapse" datatarget=".navbar-collapse">
 	 	 	 	 <span class="icon-bar"></span>
 	 	 	 	 <span class="icon-bar"></span>
 	 	 	 	 <span class="icon-bar"></span>
 	 	 	 </button>
 	 	 	 <a class="navbar-brand">Logo</a>
 	 	 </div>
 	 	 	
 	 	 <div class="collapse navbar-collapse">
 	 	 	 <ul class="nav navbar-nav">	 	
 	 	 	 	 <li><a href="index.php">Home</a></li>
 	 	 	 	 <li><a href="items.php">Items</a></li>
 	 	 	 	 <li><a href="sales.php">Sales</a></li>
 	 	 	 	 <li><a href="purchase.php">Purchase</a></li>
 	 	 	 	 <li><a href="monthlyFee.php">Monthly fees</a></li>
 	 	 	 	 <li><a href="log.php">Log</a></li>
 	 	 	 	 <li><a href="months.php">Months</a></li>
 	 	 	 </ul>
 	 	 </div>
 </div>
 </div>

 <!--img src="logo.jpg" style="margin-top: 100px;margin-left: 400px;" /-->

 <div class="container contentContainer" id="topContainer" >

 <div class="row" style="margin-top: 100px; height:750px;">

 	 	
 	 	 <div class="form-group" id="topRow" style="margin-top: 100px;">
 	 	 	
			<form id="form1" name="form1" method="post">  
 	 	 	  	<label for="categoryName">Name</label>
    			<input type="text" class="form-control" id="categoryName" aria-describedby="categoryName" placeholder="Category Name">
 				

  				<button type="submit" name="submit" id="submit" class="btn btn-primary" placeholder="Add">Submit</button>
 	 	 	</form>
 	 	 </div>
 	 	
 	 	
 </div>

 </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


 </body>
</html>
</html>