<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Retrieve data from the form
    
    $ftitle = $_POST["ftitle"];
    $fmessage = $_POST["fmessage"];
    $SA_ID='SA'.rand();


    include("../config/connection.php");  // connect with the database

    $sql = "INSERT INTO request (SA_ID,R_title,R_Des)   
            VALUES ('SA000003','$ftitle','$fmessage')";   // insert values into the table in database

    if ($con->query($sql) === TRUE) {

        header("Location: http://localhost/super_admin/index.php?message=inform_successful");

    } else {

        header("Location: http://localhost/super_admin/index.php?message=inform_unsuccessful");

    }

    $con->close(); // close the connection
}
?>


