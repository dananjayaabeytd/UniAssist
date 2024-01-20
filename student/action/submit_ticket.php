<!-- Tharindu Dananjaya -->

<?php

session_start();
$S_ID=$_SESSION['S_ID']; // get the student ID of the session 

include '../config/connection.php' ; // Connect with database

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // getting data from the input fields of the form

    $subject = $_POST["fsubject"];
    $message = $_POST["fmessage"];
    $T_No='T'.rand();

    // store data in databsse using SQL statement 

    $sql = "INSERT INTO ticket ( T_No , S_ID, T_title, T_Des,T_Status,Ad_ID)

            VALUES ('$T_No','$S_ID', '$subject', '$message', 'pending', 'AD0001')";

    if ($con->query($sql) === TRUE) {
   
        header("Location: http://localhost/student/index.php?message=submitted");

    } else {

        header("Location: http://localhost/student/index.php?message=faild");

    }

    $con->close(); // closing the connection with database

}


?>


