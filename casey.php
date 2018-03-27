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

					<p>Hello! My name is Casey Adam Brentnall. I am a sophomore attending the the University of Rochester and my major is computer
						science.
					</p>

					<h2>Work Experience</h2>
					<ul>
						<li>work as a Standardized Patient in a Suicide Prevention Training program at URMC</li>
						<li>worked as a cashier at BJ's Wholesale Club, and Family Dollar</li>

					</ul>

					<h2>Course Work</h2>
					<h3>Not heavy work load right now, but definitely a big plan ahead.</h3>

					<p>When I enrolled at the University of Rochester, I had planned on pursuing a double major in Computer Science and English.
						Because of this, my previous coursework is a pretty even mix of CSC and ENG courses. I've taken classes in acting,
						directing, dialect training, and in theatrical performance. On the computer science side, I've taken Data Structures
						and Algorithms, Formal Computation and Systems, and all the required math courses. This semester, I'm taking Introduction
						to Artificial Intelligence, my next step in the computer science track. I'm also taking Linear Algebra and Differential
						Equations, my first math class after calculus. I'm taking this class, and lastly I'm taking Musical Theatre Workshop,
						a course in preparing scenework and audition materials for musical theatre actors.</p>

				</article>

				<aside>
					<img src="images/casey.jpg" alt="casey">

				</aside>
			</div>

		</div>

		<!-- The footer should include a php include-->

		<?php
include "includes/footer.php";
?>

	</body>

	</html>