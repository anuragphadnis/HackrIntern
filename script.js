function Topic()
{
	selected=document.getElementById("SelectTopic").value;
	if(selected=='other')
	{
		document.getElementById("NewTopic").disabled=false;
	}
	else
	{
		document.getElementById("NewTopic").value='';
		document.getElementById("NewTopic").disabled=true;	
	}
}
function __Image()
{
		 var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
	 if(width<=480)
	 	document.getElementById("bigimage").src="bigimage2.jpg";
	else
		document.getElementById("bigimage").src="bigimage.jpg";
}
function DisableIp()
{
	document.getElementById("NewTopic").disabled=true;
}
function TitleCheck()
{
	title=document.getElementById("NewTopic").value;
	document.getElementById("SendNewTopic").value=title;
}
