<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title>Welcome, Assignment 4</title>
	<link href="css/styles.css" rel="stylesheet">
</head>
	<body>
	
	<div class="header">
		
		<div class="name">Survey Time</div>
	    <?php
	  		include "includes/nav.php";
	  	?>

    </div>
   <h2> Short Survey About YOU </h2>
   <p>What to share some of your courseworks or work experience during your sophmore or senior year with us? Come and fill out the survey. Maybe you will find yourself in one of the webpage in the future.</p>

   <form action="post_survey.php">
   <label for="firstname"> First Name:</label><br>
   <input type="text" name="firstname" id="firstname">
   <br>
   <label for="lastname"> Last name:</label><br>
   <input type="text" name="lastname" id="firstname">
   <br>Want to share something in:<br>
   <label for="sophmore">sophmore</label>
   <input type="radio" name="year" id="sophmore" value="sophmore" checked><br>
   <label for="senior">senior</label>
   <input type="radio" name="year" id="senior" value="senior" ><br>
   <label for="coursework">Tell me something about your coursework:</label><br>
   <textarea name="coursework" id="coursework" rows="10" cols="50"></textarea><br>
   
   <label for="workexperience">Tell me something about your work experience:</label><br>
   <textarea name="workexperience" id="workexperience" rows="10" cols="50"></textarea><br>
  <input type="submit">

   

   	
   </form>
            
    

	<?php
  		include "includes/footer.php";
  	?>

	</body>
</html>
=======
<?php

$title = "Survey 2";

include "includes/head.php";

?>

    <body>

        <div class="header">

            <div class="name">Survey Time</div>
            <?php
include "includes/nav.php";
?>

        </div>
        <h2> Short Survey About YOU </h2>
        <p>What to share some of your courseworks or work experience during your sophmore or senior year with us? Come and fill
            out the survey. Maybe you will find yourself in one of the webpage in the future.</p>

        <form action="post_survey.php">
            <label for="firstname"> First Name:</label>
            <br>
            <input type="text" name="firstname" id="firstname">
            <br>
            <label for="lastname"> Last name:</label>
            <br>
            <input type="text" name="lastname" id="firstname">
            <br>Want to share something in:
            <br>
            <label for="sophmore">sophmore</label>
            <input type="radio" name="year" id="sophmore" value="sophmore" checked>
            <br>
            <label for="senior">senior</label>
            <input type="radio" name="year" id="senior" value="senior">
            <br>
            <label for="coursework">Tell me something about your coursework:</label>
            <br>
            <textarea name="coursework" id="coursework" rows="10" cols="50"></textarea>
            <br>

            <label for="workexperience">Tell me something about your work experience:</label>
            <br>
            <textarea name="workexperience" id="workexperience" rows="10" cols="50"></textarea>
            <br>
            <input type="submit">

        </form>

        <?php
include "includes/footer.php";
?>

    </body>

    </html>
>>>>>>> 72262ee417990a582c2840ec24684673c340bdc4
