<?php

include '../config/connection.php' ;   // connect with the database

if ($_SERVER["REQUEST_METHOD"] === "GET") {

    $sql = "UPDATE request SET status=2 WHERE SA_ID = '$_GET[id]'";   // Update the status in request table

    // status = 0 -> Request rejected
    // status = 2 -> Request Approved

    if ($con->query($sql) === TRUE) {

        header("Location: http://localhost/faculty_head/index.php?message=request".$name."_Approved_successfully") ;

    } else {

        header("Location: http://localhost/faculty_head/index.php?message=request_Approve_failed") ;

        echo 'Request approve failed' ;
    }

    $con->close(); // close the connection with database

}

?>



