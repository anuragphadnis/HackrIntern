<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/script.js"></script>
	<link rel="shortcut icon" href="h.png"/>
  <link rel="stylesheet" href="style.css">
	<title>Intern Hackr</title>
</head>
<body onload="DisableIp()">
<!-- NAVBAR -->
<div class="container">
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
<!--Added to remove 50px padding -->
<div class="padd"></div>
<!-- Form -->
<?php
	include 'DBinit.php';
?>
<div style="text-align: center;">	
		<form method="post" action="SubmitTutorial.php">
		<div class="pad10"></div>
		Select Topic Name: &nbsp
	<div class="row">
		<select id="SelectTopic" name="SelectedTopic" class="col-xs-10 col-xs-offset-1" onchange="Topic();">
			<option selected disabled="">select</option>
			<?php
				$qu=mysqli_query($dbc,"show tables");
				while($row=mysqli_fetch_array($qu))
				{
					echo '<option class="caps">';
					echo $row[0];
					echo '</option>';
				}
			 ?>
			 <option class="caps">
			 	other
			 </option>
		</select>
		</div>
		<div class="pad10"></div>
		Enter New Name:
		<div class="row">
		<input type="text" required class="col-xs-10 col-xs-offset-1" placeholder="Enter New Topic Name Without Spaces" id="NewTopic" onblur="TitleCheck();" maxlength="120">
		<div class="pad10"></div>
		</div>
		Title:
		<div class="row">
		<input type="text" required name="TopicTitle" class="col-xs-10 col-xs-offset-1" placeholder="Enter Title of Tutorial" id="TopicTitle" maxlength="120" >
		</div>
		<div class="pad10 other"></div>
		Short Description
		<div class="row">
		<input type="text" required name="TopicDescription" class="col-xs-10 col-xs-offset-1" height="4em" placeholder="Enter short Description" id="TopicDescription" maxlength="120">
		</div>
		<div class="pad10"></div>
		Link:
		<div class="row">
		<input type="text" required name="SiteLink" class="col-xs-10 col-xs-offset-1"  placeholder="Enter link of Website" id="SiteLink" maxlength="200">
		</div>
		<div class="pad10"></div>
		<input type="hidden" required name="NewTopic" id="SendNewTopic">
		<input type="submit">
		</div>
		</form>
		<br><br><br><br>
		<div class="col-xs-10 col-xs-offset-1">
		Please consider these points while giving input<br>
		1. No special characters shall be made for input except underscore(_)<br>
		2. The maximum length of all inputs except url is 120 characters due to memory issues<br>
		3. The maximum length of url is 200 characters<br>
		4. Redundant URL are not allowed<br>
		5. If you input any space in Topic name it will be converted to underscore<br>
		</div>
	</div>
</div>
</div>
<?php
	mysqli_close($dbc);
?>
</body>
</html>