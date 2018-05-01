<?php
    $servername = "llc222.tt284.open.ac.uk";
    $username = "llc222";
    $password = "bcVCVGWc";
    $dbname = "llc222_db";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn)
    {
        die("Connection to database failed: <br>" . mysqli_connect_error());
    }
    else
    {
        // echo "Connected to database! <br> <br>";
    }

?>