<!DOCTYPE html>

/*
  PHP code to connect to the Open University Servers for the Open University TT284 Web technologies TMA02
  Author Leire Larrea Casado (E1662175)
  Version 1.0 (January 2017)
 */

<html>
    <body>

        <?php
            include 'connect.php';

            $sql = "SELECT RunnerID, EventID, Date, FinishTime, Position, CategoryID, AgeGrade, PB FROM Results";
            $result = mysqli_query($conn, $sql);

            // echo "Adding data to database...<br>";

            $runnerId = $_POST["RunnerID"];
            $eventId = $_POST["EventID"];
            $date = $_POST["Date"];
            $finishTime = $_POST["FinishTime"];
            $position = $_POST["Position"];
            $categoryId = $_POST["CategoryID"];
            $ageGrade = $_POST["AgeGrade"];
            $PB = $_POST["PB"];

            $sql = "INSERT INTO Results (RunnerID, EventID, Date, FinishTime, Position, CategoryID, AgeGrade, PB) VALUES ('$runnerId', '$eventId', '$date', '$finishTime', '$position', '$categoryId', '$ageGrade', '$PB')";

            if (mysqli_query($conn, $sql))
            {
                echo "New record created successfully";
            }
            else
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }


            mysqli_close($conn);
            // echo "<br>Disconnected from database!"

        ?>

        <br><br>Thank you! You have submitted: <br><br>
        Runner ID: <?php echo $_POST["RunnerID"] ?> <br><br>
        Event ID: <?php echo $_POST["EventID"] ?> <br><br>
        Date ID: <?php echo $_POST["Date"] ?> <br><br>
        Finish time ID: <?php echo $_POST["FinishTime"] ?> <br><br>
        Position: <?php echo $_POST["Position"] ?> <br><br>
        Category ID: <?php echo $_POST["CategoryID"] ?> <br><br>
        Age Grade: <?php echo $_POST["AgeGrade"] ?> <br><br>
        Personal Best: <?php echo $_POST["PB"] ?> <br><br>
    
    </body>
</html>