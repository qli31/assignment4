<?php $title = "Jimmy";
include "includes/head.php";
?>


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

				<p>Hello! My name is Jimmy Yang. I am a
					<em>sophomore</em> attending the University of Rochester and I am double majoring in Economics and Global Perspectives History.</p>

				<h2>Work Experience</h2>
				<ul>
					<li>Student Aide at the University of Rochester. I patrol sectors and act as the eyes and ears of Public Safety</li>
					<li>worked as a technical assistant at the University of Rochester Medical Center</li>


				</ul>



				<h2>Course Work</h2>
				<h3>"Not overlaod yet. Feeling awesome!"</h3>

				<p>When I enrolled at the University of Rochester, I had planned to pursue a Financial Economics major. I have decided to
					change course recently and do a double major in Economics and Global Perspectives History. I've taken courses on Calculus
					II, the Vikings, Microeconomics, Macroeconomics, Environmental Economics, Statistics, Python, HTML, and Russian politics.
					I'm taking a course called Hitler's Germany, which analyzes the events and causes that led to the rise of Hitler and
					the Nazis. I love the courses I am taking. It is not too much for me. </p>

			</article>


			<aside>
				<img src="images/jimmy.jpg" alt="jimmy">

			</aside>

		</div>

	</div>
	<!-- The footer should include a php include-->

	<?php
include "includes/footer.php";
?>

</body>

</html>