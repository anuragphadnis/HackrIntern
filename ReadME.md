								Read me First
								-------------
	
			Project Submitted by Anurag Phadnis


		This is a project made for Summer Internship at Hackr.io (2017). Submitted by Anurag Phadnis. This is a prototype website of actual hackr.io website. 		Its features are:
			1. You can actually submit and watch tutorials
			2. Website changes its style for better interface on mobile devices
			3. You can add tutorials for topics which are not present currently
			4. It uses sql to store data for tutorials
			5. It has used open source liberary is used for making its inteface better on both mobile and desktops(bootstrap)
			6. The name of website gets automatically extracted out of the url
			7. It loads diffrent image on index page on desktops and on mobile screens
		Cons:
			1. Anyone can spam the website by adding gibbberish tutorials
			2. As I learned PHP while making this website there may be some hidden bugs inside it
			3. URl is limited to upto 200 characters ude to memory issues
			4. For same reason other inputs are restricted to 120 characters

		How to use this website:

		When you open index.html you will have two options
			1. Watch Tutorials
			2. Submit Tutorials
			
		Now if the connection to database is proper and server supports php and sql then webiste will work fine. There is online version available on 
		http://testmyphp123.000webhostapp.com

		If you go to watch tutorials you will have list of all topic names inside database on clicking which you can accesss tutorials about that topic

		If you go to submit tuotorials you can submit your own tutorials
			1. Choose a topic name if not present in list choose other and provide custom topic name in new name field(It will be disabled until you choose 			   other)
			2. Add title of tutorial(120 char max)
			3. Add a short description to tell people what is this tutorial about(max 120 characters)
			4.Add URL (max 200 characters)
			5. Hit submit
