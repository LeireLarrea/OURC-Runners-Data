<!DOCTYPE html>

/*
  PHP code to retrieve, sort and display OURC Results from the Open University Servers for the Open University TT284 Web technologies TMA02
  Author Leire Larrea Casado (E1662175)
  Version 1.1 (January 2017)
 */

<html>
    <body>

        <?php
            include 'connect.php';

            $sql = "SELECT RunnerID, EventID, Date, FinishTime, Position, CategoryID, AgeGrade, PB FROM Results";

            if ($_POST['SortBy'] == RunnerID)
            {
                 $sql .= " ORDER BY RunnerID";
            }

            if ($_POST['SortBy'] == EventID)
            {
                $sql .= " ORDER BY EventID";
            }

            if ($_POST['SortBy'] == Date)
            {
                $sql .= " ORDER BY Date";
            }

            if ($_POST['SortBy'] == FinishTime)
            {
                $sql .= " ORDER BY FinishTime";
            }

            if ($_POST['SortBy'] == Position)
            {
                $sql .= " ORDER BY Position";
            }

            if ($_POST['SortBy'] == CategoryID)
            {
                $sql .= " ORDER BY CategoryID";
            }

            if ($_POST['SortBy'] == AgeGrade)
            {
                $sql .= " ORDER BY AgeGrade";
            }

            if ($_POST['SortBy'] == PB)
            {
                $sql .= " ORDER BY PB";
            }

            if ($_POST['    SortIn'] == asc)
            {
                $sql .= " ASC";
            }

            if ($_POST['SortIn'] == desc)
            {
                $sql .= " DESC";
            }

            $result = mysqli_query($conn, $sql);

            echo "Reading data from database... <br><br>";

            if ($_POST['IncludeAgeGrade']  == 1)
            {
                if (mysqli_num_rows($result) > 0)
                {
                    echo "<table border = '1'>
                    
                    <tr>
                        <th>Runner ID</th>
                        <th>Event ID</th>
                        <th>Date</th>
                        <th>Finish Time</th>
                        <th>Position</th>
                        <th>Category</th>
                        <th>Age Grade</th>
                        <th>Personal Best</th>
                    </tr>";
  
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                            echo "<td>" . $row['RunnerID'] . "</td>";
                            echo "<td>" . $row['EventID'] . "</td>";
                            echo "<td>" . $row['Date'] . "</td>";
                            echo "<td>" . $row['FinishTime'] . "</td>";
                            echo "<td>" . $row['Position'] . "</td>";
                            echo "<td>" . $row['CategoryID'] . "</td>";
                            echo "<td>" . $row['AgeGrade'] . "</td>";
                            echo "<td>" . $row['PB'] . "</td>";
                        echo "</tr>";
                    }

                     echo "</table>";

                }
                else
                {
                    echo "0 results";
                }

            }

            if ($_POST['IncludeAgeGrade']  == 0)
            {
                echo "<table border = '1'>

                    <tr>
                        <th>Runner ID</th>
                        <th>Event ID</th>
                        <th>Date</th>
                        <th>Finish time</th>
                        <th>Position</th>
                        <th>Category</th>
                        <th>Personal Best</th>
                    </tr>";
  
                if (mysqli_num_rows($result) > 0)
                {

                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                            echo "<td>" . $row['RunnerID'] . "</td>";
                            echo "<td>" . $row['EventID'] . "</td>";
                            echo "<td>" . $row['Date'] . "</td>";
                            echo "<td>" . $row['FinishTime'] . "</td>";
                            echo "<td>" . $row['Position'] . "</td>";
                            echo "<td>" . $row['CategoryID'] . "</td>";
                            echo "<td>" . $row['PB'] . "</td>";
                        echo "</tr>";
                    }
 
                echo "</table>";
    
                }
                else
                {
                    echo "0 results";
                }
            }
        ?>
    </body>
</html>