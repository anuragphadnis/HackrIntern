<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="/h.png"/>
  	<meta name="author" contnet="Anurag Phadnis">
  <link rel="stylesheet" href="style.css">
	<title>Intern Hackr</title>
</head>
<!-- PHP functions definations -->

<body>
<div class="container">
<!-- NAVBAR -->
<nav class="navbar navbar-fixed-top navbar-default">
<div  class="navbar-header">
<a class="navbar-brand" href="index.html">hackr.io</a>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
</button>
</div>
<div id="menu" class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="watch.php">View Tutorials</a></li>
<li><a href="submit.php">Submit Tutorials</a></li>
</ul>
</div>
</nav>
<!--Added to give 50px padding -->
<div class="padd"></div>
<div style="padding-top:3vmax;"></div>
<?php
include 'DBinit.php';
 $qu=mysqli_query($dbc,"show tables")
 or die(mysqli_errorno($dbc));
 $cnt=0;
 echo '<div class="row">';
 while($row=mysqli_fetch_array($qu))
 {
 	echo '<a href =tutorial.php/?name='.$row[0].'>';
 	echo '<img src="alphabets/'.$row[0][0].'.png" class="col-xs-2 col-sm-1 col-xs-offset-1 col-sm-offset-1 alphabets" alt='.$row[0][0].'>';
 	echo '<div class="col-xs-8 col-sm-3 lang caps">';
 	echo $row[0];
 	echo '</div>';
 	echo '</a>';
 	if($cnt%2==1)
 		echo '<div style="padding-top:3vmax;" class="col-xs-12 hidden-xs visible-sm visible-md visible-lg"></div>';
 	echo '<div style="padding-top:3vmax;" class=" col-xs-12 visible-xs hidden-sm"></div>';
 	$cnt+=1;
}
echo '</div>';
 mysqli_close($dbc);
?>
</div>
</body>
</html>