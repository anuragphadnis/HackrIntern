<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="/h.png"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/style.css">
	<title>Intern hackr</title>
		<meta name="author" contnet="Anurag Phadnis">
</head>
<body>
<div class="container">
<!-- NAVBAR -->
<nav class="navbar navbar-fixed-top navbar-default">
<div  class="navbar-header">
<a class="navbar-brand" href="/index.html">hackr.io</a>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
</button>
</div>
<div id="menu" class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="/watch.php">View Tutorials</a></li>
<li><a href="/submit.php">Submit Tutorials</a></li>
</ul>
</div>
</nav>
<!--Added to remove 50px padding -->
<div class="padd"></div>
	<div class="padd"></div>
	<?php
		$name=$_GET['name'];
		include 'DBinit.php';
		$qu=mysqli_query($dbc,"select * from $name order by title")
			or die(mysqli_error($dbc));
		while($row=mysqli_fetch_array($qu))
		{
			echo '<div class="damn">';
			echo '<div class="row">';
			echo '<a href="'.$row['url'].'">';
				echo '<div class="col-xs-10 col-xs-offset-1 langr1 tutalphabets">';
				echo '<img src="/alphabets/'.strtolower($row['title'][0]).'.png" class=" col-xs-4 col-md-2 col-md-offset-5 col-xs-offset-4">';
				echo '</div>';
				echo '<div class="col-xs-5 col-xs-offset-1 langr1">';
					echo $row['title'];
				echo '</div>';
			echo '</a>';
			echo '<a href=//'.$row['website'].'>';
				echo '<div class="col-xs-5 langr1">';
					echo $row['website'];
				echo '</div>';
				echo '<div class=col-xs-1></div>';
			echo '</a>';
			echo '</div>';
			echo '<div class="row">';
			echo '<a href="'.$row['url'].'">';
				echo '<div class="col-xs-10 col-xs-offset-1 langr1">';
					echo $row['description'];
				echo '</div>';
			echo '</a>';
			echo '</div>';
			echo '</div>';
			echo'<div style="padding-top:3vmax;"></div>';
		}
		mysqli_close($dbc);
	 ?>
</div>
</body>
</html>