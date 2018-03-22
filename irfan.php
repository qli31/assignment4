<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Irfan Bashir, Assignment 3</title>
		<!-- Designer include stylesheet-->
		<link href="css/styles.css" rel="stylesheet">
		<!-- links for fontface -->
		<!-- Designer include lato fonts for headers and Roboto for body text-->
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	</head>

	<body>
	<!-- The header should include a php include-->
	<!-- coder make sure the php files work-->
	<div class="header">

		<div class="name">Sophmore: Irfan Bashir</div>
	    <?php
	  		include "includes/nav.php";
	  	?>
    </div>
     
     <!-- The page should follow a flex layout-->       

	<div class="container flexColumn">
	   
	    <div class="container">
	        <article>
	        	<h2>About Me</h2>

		        <p>Hello! My name is Irfan Bashir. I am a sophomore and an international student from Indian attending the University of Rochester and my major is Financial Economics.</p>

				<h2>Work Experience</h2>

				<p>I am currently working in many roles. I am the co-founder of the Federation for Peace and Development (FPD), which my partners and I founded in December 2016. Although it is in Srinagar, Kashmir, I am still responsible for management, recruitment, planning, and outreach. I am also a Digital Media Specialist at Rettner. My responsibilities include troubleshooting errors, 3d printing, call logging, maintenance of systems, and large scale printing. On the job, I have learned how to use many software programs, such as Autodesk 3ds and Blender. I am also a special correspondent, reporter, and editor with The Kashmir Scan since June 2009. My responsibilities include interviewing various notable statespeople, political journalism, travel journalism, photography, and marketing. I've also worked as a content manager in the past with Sareeh. I managed content uploaded to the website and handled graphic design handle book uploads.</p>

				<h2>Course Work</h2>
				
				<p>When I enrolled at the University of Rochester, I had planned on pursuing a Financial Economics major. As a result, I have a lot of economics and finance courses under my belt. I am taking Finance, Economics, Computer Science and Dance courses this semester. Dance is by far my most favorite as it helps me become more aware of my body and experiment with flow and movement. My economics course taught by Professor Rizzo is interesting in that it doesn’t fit the general description of an economics course. Professor Rizzo believes in applying meta-principles in everyday life to help us better evaluate cost/benefit decisions. All in all, my course load this semester is both exciting and challenging and covers both mental and physical aspects of human learning. Spring of 18 feels good, so far!</p>


				<h2>Hometown Info</h2>

				<p>I was born in Srinagar, in the Indian administered part of Jammu and Kashmir state. It is located in Srinagar District, which is in the northwestern part of Jammu and Kashmir state, close to the Pakistani-Indian border. The population was 1,273,312, according to the 2011 Census. The city is estimated to have been founded in the 6th Century AD. The city is governed by Srinagar Municipal Corporation, which is essentially an elected body of councillors. The council's leader is Ghulam Mustafa Bhat.</p>

	        </article>
	   
	      
	     	<aside>
	            <img src="images/irfan.jpg" alt="irfan">
	            <h3>Extracurricular Activities</h3>
	            <ul>
	            	<li>Writing short stories, news articles and poetry</li>
	            	<li>Reading fictional and Non fiction books</li>
	            </ul>
	     
	    	</aside>
	    </div>
	    
	</div>

	<!-- The footer should include a php include-->

	<?php
  		include "includes/footer.php";
  	?>

	</body>
	
</html>