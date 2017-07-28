<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<meta name="author" contnet="Anurag Phadnis">
  <link rel="icon" type="image/png" href="h.png" sizes="16x16">
  <link rel="stylesheet" href="style.css">
	<title>Intern Hackr</title>
</head>
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
<!--Added to remove 50px padding -->
<div class="padd"></div>
<?php
/*
	This is the page from which tutorials are actually submitted through the form in previous page
	It converts topic name to all lowercase because topic names are case insensititve
*/
	$title=$_POST['TopicTitle'];
	$desc=$_POST['TopicDescription'];
	$url2=$_POST['SiteLink'];
	$SelectedTopic=$_POST['SelectedTopic'];
	$NewTopic=$_POST['NewTopic'];
	$Topic;
	if($NewTopic!='')
	{
		$len=strlen($NewTopic);
		for($i=0;$i<$len;$i++)
		{
			if($NewTopic[$i]==' ')
			{
				$NewTopic[$i]='_';
			}
		}
		$Topic=strtolower($NewTopic);
	}
	else
		$Topic=strtolower($SelectedTopic);
	/*
		This will extract website name from url. Logic is website name is  http://---------/page1.html
		The content b/w // and / is website name
	*/
	$website='';
	$cnt=0;$i=0;
	$flag=0;
	$len=strlen($url2);
	for($i=1;$i<$len;$i++)
		if($url2[$i]=='/'&&$url2[$i-1]=='/')
			$flag=1;
	$url='';
	if($flag==0)
		$url='//'.$url2;
	else
		$url=$url2;
	$len=strlen($url);
	for($j=0;$j<$len;$j++)
	{
		if($url[$j]=='/')
		{
				$cnt++;
		}
		else if($cnt==2)
			$website[$i++]=$url[$j];
	}
	include 'DBinit.php';//Connects to database
	if($Topic!=$SelectedTopic)
	{
		//This is when we need to make nwew topic/Table
		$flag=1;
			if($qu0=mysqli_query($dbc,"create table $Topic (uid int primary key,title varchar(120) , description varchar(120),website varchar(120) ,url varchar(200) unique)"))
			{
				echo ' ';
			}
	}
	$flag=1;
	if($flag==1)
	{
		$uid=mysqli_query($dbc,"SELECT count(*) from $Topic") or die(mysqli_error($dbc));
		$uid2=mysqli_fetch_array($uid);
		$uid2[0]++;
		//HElloecho $Topic.' '.$title.' '.$desc.' '.$website.' '.$url.' ';
		$qu=mysqli_query($dbc,"INSERT INTO $Topic VALUES ($uid2[0],'$title','$desc','$website','$url')") or die(mysqli_error($dbc));
	 	if($qu)
	 	{
	 		echo "Succesful upload click<a href='/index.html'> here</a> to go to main site";
	 		echo '<br/>';
	 		echo 'Topic Name: '.$Topic;
	 		echo '<br/>';
	 		echo 'Title of Tutorial: '.$title;
	 		echo '<br/>';
	 		echo 'Description: '.$desc;
	 		echo '<br/>';
	 		echo 'Website Name: '.$website;
	 		echo '<br/>';
	 		echo 'Url: <a href='.$url.'>'.$url;
	 	}
	 }	
	 mysqli_close($dbc);
 ?>
 </div>
</body>
</html>