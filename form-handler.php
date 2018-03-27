<?php

$title = "Thank You!";

include "includes/head.php";

$db_host = "66.147.242.186";
$db_user = "urcscon3_medell";
$db_pw = "coffee1N";
$db_name = "urcscon3_medell";

$connect = new mysqli($db_host, $db_user, $db_pw, $db_name);

$query = "";
$add = "";

?>

	<body>

		<div class="header">

			<div class="name">Thank you!</div>
			<?php
include "includes/nav.php";
?>

		</div>
		<p>Thank you for filling out the survey!</p>
		<p>Click
			<a href="index.php">here</a> to go back home</p>

		<?php
include "includes/footer.php";

mysql_close($connection);
?>

	</body>

	</html>