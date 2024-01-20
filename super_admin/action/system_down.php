<?php

// Validate and process the submitted form data

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    include("../config/connection.php");  // connect with the database

    $sql = "UPDATE system SET available=0 WHERE user = 'student'";  // update the data in database using SQL statement

    if ($con->query($sql) === TRUE) {

        header("Location: http://localhost/super_admin/index.php?message=system_down_successful");

    } else {

        header("Location: http://localhost/super_admin/index.php?message=system_down_unsuccessful");
    }

    $con->close(); // close the connection
}
?>


