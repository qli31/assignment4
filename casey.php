<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Casey A. Brentnall, Assignment 3</title>
		<!-- Designer include stylesheet-->
		<link href="css/styles.css" rel="stylesheet">
		<!-- links for fontface -->
		<!-- Designer include lato fonts for headers and Roboto for body text-->
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	</head>

	<body>

	<!-- The header should include a php include-->
	<!-- coder make sure all the php inclueds  work-->
	<div class="header">
		
		<div class="name">Sophmore: Casey A. Brentnall</div>
	    <?php
	  		include "includes/nav.php";
	  	?>
    </div>
    
    <!-- The page should follow a flex layout-->

	<div class="container flexColumn">
	   
	    <div class="container">
	        <article>
	        	<h2>About Me</h2>

		        <p>Hello! My name is Casey Adam Brentnall. I am a sophomore attending the the University of Rochester and my major is computer science.</p>

				<h2>Work Experience</h2>

				<p>Currently, I work as a Standardized Patient in a Suicide Prevention Training program at URMC. In this program, I've developed a character who is at risk for suicide, and I work with physicians and psychologists, helping them learn how to identify and treat depression and suicide. In the past, I've worked as a cashier at BJ's Wholesale Club, and Family Dollar. At these jobs, I both ran a cash register and stocked, cleaned, and handled returns. I've also worked summers as an ice cream scooper and cook at Friendly's. I learned how to make a variety of simple food items, and was in charge of cleaning the grill area thoroughly at the end of every shift.</p>

				<h2>Course Work</h2>
				
				<p>When I enrolled at the University of Rochester, I had planned on pursuing a double major in Computer Science and English. Because of this, my previous coursework is a pretty even mix of CSC and ENG courses. I've taken classes in acting, directing, dialect training, and in theatrical performance. On the computer science side, I've taken Data Structures and Algorithms, Formal Computation and Systems, and all the required math courses. This semester, I'm taking Introduction to Artificial Intelligence, my next step in the computer science track. I'm also taking Linear Algebra and Differential Equations, my first math class after calculus. I'm taking this class, and lastly I'm taking Musical Theatre Workshop, a course in preparing scenework and audition materials for musical theatre actors.</p>


				<h2>Hometown Info</h2>

				<p>I was born in Farmington, New York. Farmington is a town located in the northern part of Ontario County, New York, United States. The population was 11,825 at the 2010 census. Farmington is about twenty-five miles southeast of Rochester, New York. The town was formed along with its county in 1789. The town is governed by a town council, and the council's supervisor is Peter Ingalsbe.</p>

	        </article>
	   
	      
	     	<aside>
	            <img src="images/casey.jpg" alt="casey">
	            <h3>Extracurricular Activities</h3>
	            <ul>
	            	<li>TOOP, a student run theatrical group</li>
	            	<li>ROC Players, a musical theatre organization</li>
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