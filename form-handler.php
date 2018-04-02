<?php

$title = "Thank You!";

include "includes/head.php";

$db_host = "66.147.242.186";
$db_user = "urcscon3_medell";
$db_pw = "coffee1N";
$db_name = "urcscon3_medell";

$connect = mysqli_connect($db_host, $db_user, $db_pw, $db_name);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$year = $_POST['year'];
$coursework = $_POST['coursework'];
$workexperience = $_POST['workexperience'];

$query = "INSERT INTO Survey (firstname, lastname, year, coursework, workexperience) VALUES ('$firstname', '$lastname', '$year', '$coursework', '$workexperience')";
$result = mysqli_query($connect, $query);

?>

	<body>

		<div class="header">

			<div class="name">Thank you!</div>

			<?php
include "includes/nav.php";
?>

		</div>
		<?php
if ($result) {
    ?>
			<p>Thank you for filling out the survey!</p>

			<p>Click
				<a href="index.php">here</a> to go back home</p>
			<?php
} else {
    die("Database query failed.");
}
?>

				<?php
include "includes/footer.php";

mysql_close($connection);
?>

	</body>

	</html>