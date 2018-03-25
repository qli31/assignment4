<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Jimmy Yang, Assignment 4</title>
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
		
		<div class="name">Sophmore: Jimmy Yang</div>
	    <?php
	  		include "includes/nav.php";
	  	?>
    </div>
            
    <!-- The page should follow a flex layout-->
	<div class="container flexColumn">
	   
	    <div class="container">
	        <article>
	        	<h2>About Me</h2>

		        <p>Hello! My name is Jimmy Yang. I am a sophomore attending the University of Rochester and I am double majoring in Economics and Global Perspectives History.</p>

				<h2>Work Experience</h2>
				<ul>
					<li>Student Aide at the University of Rochester. I patrol sectors and act as the eyes and ears of Public Safety</li>
					<li>worked as a technical assistant at the University of Rochester Medical Center</li>
					
				</ul> 

		

				<h2>Course Work</h2>
				<h3>Not overlaod yet. Feeling awesome!</h3>

				<p>When I enrolled at the University of Rochester, I had planned to pursue a Financial Economics major. I have decided to change course recently and do a double major in Economics and Global Perspectives History. I've taken courses on Calculus II, the Vikings, Microeconomics, Macroeconomics, Environmental Economics, Statistics, Python, HTML, and Russian politics. This semester, I'm taking Econometrics, which is a class that covers the basic tools of estimation, inference and forecast of cross-section, time-series and panel data models. I'm also taking a course called Hitler's Germany, which analyzes the events and causes that led to the rise of Hitler and the Nazis. I'm also taking a course on Colonial Latin America, which analyzes the society and culture of Colonial Latin America, and how numerous factors in pre-Columbian America, Europe, and Africa led to the society that existed in Colonial Latin America. And of course, I'm taking this class.</p>


				<h2>Hometown Info</h2>

				<p>Although my family and I have moved around a lot in our lives, I currently consider my hometown to be Fargo, North Dakota. It's located in Cass County along the Minnesota/North Dakota border, right on the west bank of the Red River of the North. It is about a four hour drive from Minneapolis, Minnesota. According to the 2016 Census, Fargo had a population of 120,762. The city was founded in 1871. Its current mayor is Tim Mahoney.</p>

	        </article>
	   
	      
	     	<aside>
	            <img src="images/jimmy.jpg" alt="jimmy">
	            <h3>Extracurricular Activities</h3>
	            <ul>
	            	<li>Brother of Beta Theta Pi in the community-programming committee</li>
	            	<li>founding member of Beatbox Collective, a new club on the U of R dedicated to beatboxing</li>
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