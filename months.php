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
 	 	 	 	 <li class="active"><a href="months.php">Months</a></li>
 	 	 	 </ul>
 	 	 </div>
 </div>
 </div>

 <!--img src="logo.jpg" style="margin-top: 100px;margin-left: 400px;" /-->

 <div class="container contentContainer" id="topContainer" >

 <div class="row" style="margin-top: 100px; height:750px; background:transparent url('bak.jpg') no-repeat center center /cover">

 	 	
 	 	 <div class="col-md-6 col-md-offset-3" id="topRow" style="margin-top: 100px;">
 	 	 	
 	 	 	
 	 	 <p class="lead">Hi, your project xx has made/lost: x$</p>
 	 	 	
 	 	 <p style="font-size: 150%;">Income: x $ <br/>
 	 	 	Expense: x $<br/>
 	 	 	Sum: x $</p>
 	 	 	
 	 	 <a class="bold marginTop" href="todo.php">Log or todo?</a>
 	 	 	
 	 	 	
 	 	 	
 	 	 </div>
 	 	
 	 	
 </div>

 </div>


 <div class="container contentContainer" id="details">
<!--
 <div class="row" class="center">
 	 	
 	 	 <h1 class="center title">Hvorfor er vi best?</h1>
 	 	
 </div>
 	 	-->
 <div class="row marginBottom">
 	 	
 	 	 <div class="col-md-7 marginTop">
 	 	 <h2><span class="glyphicon"></span> Link</h2>
 	 	 <p>Penger denne måneden.</p>
 	 	 <a class="btn btn-success marginTop" href="months.php">$$$</a>
 	 	 	
 	 	 </div>
 	 	 	
 	 	 <div class="col-md-7 marginTop">
 	 	 <h2><span class="glyphicon glyphicon-off"></span> Sales</h2>
 	 	 <p>Total sales.</p>
 	 	 <a class="btn btn-success marginTop" href="sales.php">Test</a>
 	 	 	
 	 	 </div>
 	 	 	<!--
 	 	 <div class="col-md-4 marginTop">
 	 	 <h2><span class="glyphicon glyphicon-pencil"></span> Åpningstiden</h2>
 	 	 <p>Når er vi åpent?</p>
 	 	 <a class="btn btn-success marginTop" href="apningstider.php">Åpningstider</a>
 	 	 	
 	 	 </div>-->
 	 	
 </div>
 </div>
<!--
 <div class="container contentContainer" id="footer">

 <div class="row">
 	 	
 	 	 <h1 class="center title">Meld deg på et kurs</h1>
 	 	
 	 	 <a class="lead center" href="paamelding.php">Lær deg å klatre med hjelp av våre instruktører</p>
 	 	 	
 	 	
 </div>


 </div>-->

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as
needed -->
 <script src="js/bootstrap.min.js"></script>

 <script>

 $(".contentContainer").css("min-height",$(window).height());
 
 </script>
 </body>
</html>
</html>