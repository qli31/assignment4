
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Irfan Bashir, Assignment 4</title>
		<!-- Designer include stylesheet-->
		<link href="css/styles.css" rel="stylesheet">
		<!-- links for fontface -->
		<!-- Designer include lato fonts for headers and Roboto for body text-->
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	</head>

<?php

$title = "Irfan";

include "includes/head.php";

?>


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
				<ul>
					<li>co-founder of the Federation for Peace and Development (FPD), which my partners and I founded in December 2016</li>
					<li>special correspondent, reporter, and editor with The Kashmir Scan since June 2009</li>

					
				</ul> 

			

				<h2>Course Work</h2>
				<h3>"Not that busy as for now. Love to dance. Still get time for it!"</h3>
				<p>When I enrolled at the University of Rochester, I had planned on pursuing a Financial Economics major. All in all, my course load this semester is both exciting and challenging and covers both mental and physical aspects of human learning. I would love to spend more time on dancing in this sememster.Spring of 18 feels good, so far! </p>


				</ul>



				<h2>Course Work</h2>

				<h3>Not that busy as for now. Love to dance!</h3>

				<p>When I enrolled at the University of Rochester, I had planned on pursuing a Financial Economics major. My economics course taught by Professor Rizzo is interesting in that it doesn’t fit the general description of an economics course. All in all, my course load this semester is exciting and covers both mental and physical aspects of human learning. I will be able to know something new but also have more time to dance. Spring of 18 feels good, so far!</p>



		
	        </article>


	     	<aside>
	            <img src="images/irfan.jpg" alt="irfan">

	            
	    	</aside>
	    </div>

	</div>

	<!-- The footer should include a php include-->

	<?php
include "includes/footer.php";
?>

	</body>

</html>