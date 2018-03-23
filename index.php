<?php

$title = "Home";

include "includes/head.php";

?>

	<body>
		<!-- The header should include a php include-->
		<!-- coder make sure all the php files work-->
		<div class="header">
			<div class="name">Sophmores at U of R</div>
			<?php
include "includes/nav.php";
?>
		</div>

		<!-- The page should follow a flex layout-->

		<div class="container flexColumn">

			<div class="container">
				<article>

					<h2>Casey A. Brentnall</h2>

					<p>Hello! My name is Casey Adam Brentnall. I am a sophomore attending the the University of Rochester and my major is computer
						science.</p>

					<h2>Irfan Bashir</h2>

					<p>Hello! My name is Irfan Bashir. I am a sophomore and an international student from Indian attending the University of
						Rochester and my major is Financial Economics.</p>

					<h2>Jimmy Yang</h2>

					<p>Hello! My name is Jimmy Yang. I am a sophomore attending the University of Rochester and I am double majoring in Economics
						and Global Perspectives History.</p>

				</article>

				<!-- create a slideshow that is constantly showing the picture of the students-->

				<aside>
					<div class="rslides">
						<img src="images/casey.jpg" alt="Casey">
						<img src="images/irfan.jpg" alt="Irfan">
						<img src="images/jimmy.jpg" alt="Jimmy">
					</div>
				</aside>
				<!--slideshow-->

			</div>
			<!--.container-->

		</div>
		<!-- The footer should include a php include-->
<?php
include "includes/footer.php";
?>

			<!-- responsive slider -->
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
			<script src="js/responsiveslides.js"></script>
			<script>
				$(function () {
					$(".rslides").responsiveSlides();
				});
			</script>

	</body>


	</html>