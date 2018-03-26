
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Casey A. Brentnall, Assignment 4</title>
		<!-- Designer include stylesheet-->
		<link href="css/styles.css" rel="stylesheet">
		<!-- links for fontface -->
		<!-- Designer include lato fonts for headers and Roboto for body text-->
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	</head>

<?php

$title = "Casey";

include "includes/head.php";

?>


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
				<ul>
					<li>work as a Standardized Patient in a Suicide Prevention Training program at URMC</li>
					<li>worked as a cashier at BJ's Wholesale Club, and Family Dollar</li>

					
				</ul> 

				

				<h2>Course Work</h2>
				<h3>"Not heavy work load right now, but definitely a big plan ahead."</h3>
				<p>When I enrolled at the University of Rochester, I had planned on pursuing a double major in Computer Science and English. Because of this, my previous coursework is a pretty even mix of CSC and ENG courses. This semester, I'm taking Introduction to Artificial Intelligence, my next step in the computer science track. I'm also taking Linear Algebra and Differential Equations, my first math class after calculus. I'm taking this class, and lastly I'm taking Musical Theatre Workshop, a course in preparing scenework and audition materials for musical theatre actors. I like the schedule I have as for now. I get spare time for my hobbies. </p>


				



	        </article>


	     	<aside>
	            <img src="images/casey.jpg" alt="casey">

	    </div>

	</div>

	<!-- The footer should include a php include-->

 	<?php
include "includes/footer.php";
?>

	</body>

</html>