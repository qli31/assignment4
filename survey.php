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

            <article>

                <h2> Survey - Your experiences</h2>
                <p>This webpage showcases the experiences of students in their sophomore and senior years.</p>
                <p>Want to share some of your courseworks or work experience during time in college? Come and fill out the survey.
                    Maybe you will find yourself in one of these pages in the future.</p>

                <form action="form-handler.php" method="POST">
                    <label for="firstname"> First Name:</label>
                    <input type="text" name="firstname" id="firstname">
                    <label for="lastname"> Last name:</label>
                    <input type="text" name="lastname" id="lastname">

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

                    <p>Tell us something about your coursework: </p>
                    <textarea name="coursework" id="coursework" rows="10"></textarea>

                    <p>Tell us something about your work experience: </p>
                    <textarea name="workexperience" id="workexperience" rows="10"></textarea>
                    <input type="submit" value="submit">

                </form>

            </article>

            <aside>

                <?php

// $db_host = "66.147.242.186";
$db_host = "localhost";
$db_user = "urcscon3_medell";
$db_pw = "coffee1N";
$db_name = "urcscon3_medell";

$connect = new mysqli($db_host, $db_user, $db_pw, $db_name);

$query = "SELECT * FROM Survey ORDER BY responseID DESC";
$result = mysqli_query($connect, $query);

if ($result) {

    echo "
    <h2>Response from previous users: </h2>
    <ol>
    ";

    $i = 0;
    while ($row = $result->fetch_array()) {
        ++$i;
        echo "
        <li>
        <ul>
            <li><h3>" . $row['firstname'] . " " . $row['lastname'] . "</h3></li>
            <li><strong>Year: </strong>" . $row['year'] . "</li>
            <li><strong>Course Work: </strong>" . $row['coursework'] . "</li>
            <li><strong>Work Experience: </strong>" . $row['workexperience'] . "</li>
            </ul>
        </li>
    ";
        if ($i == 3) {
            break 1;
        }
    }
    echo "
    </ol>
    ";
}
?>

            </aside>

        </div>

        <?php
include "includes/footer.php";

mysqli_free_result($result);

mysqli_close($connect);
?>

    </body>

    </html>