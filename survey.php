<?php

$title = "Survey";

include "includes/head.php";

?>

    <body>

        <div class="header">

            <div class="name">Survey Time</div>
            <?php
include "includes/nav.php";
?>

        </div>

        <div class="container">

            <div class="form-container">

                <h2> Short Survey About YOU </h2>
                <p>What to share some of your courseworks or work experience during your sophmore or senior year with us? Come
                    and fill out the survey. Maybe you will find yourself in one of the webpage in the future.</p>

                <form action="form-handler.php" method="POST">
                    <label for="firstname"> First Name:</label>
                    <input type="text" name="firstname" id="firstname">
                    <label for="lastname"> Last name:</label>
                    <input type="text" name="lastname" id="firstname">

                    <p>Want to share something from your: </p>
                    <input type="radio" name="year" id="first" value="first" checked>
                    <label for="first">First Year</label>
                    <br>
                    <input type="radio" name="year" id="sophomore" value="sophomore">
                    <label for="sophomore">Sophomore Year</label>
                    <br>
                    <input type="radio" name="year" id="junior" value="junior">
                    <label for="junior">Junior Year</label>
                    <br>
                    <input type="radio" name="year" id="senior" value="senior">
                    <label for="senior">Senior Year</label>
                    <br>

                    <p>Tell me something about your coursework: </p>
                    <textarea name="coursework" id="coursework" rows="10"></textarea>

                    <p>Tell me something about your work experience: </p>
                    <textarea name="workexperience" id="workexperience" rows="10"></textarea>
                    <input type="submit">

                </form>

            </div>

        </div>

        <?php
include "includes/footer.php";
?>

    </body>

    </html>