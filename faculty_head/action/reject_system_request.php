<!--Tharindu Dananjaya -->

<?php

include '../config/connection.php' ;   // connect with the database

if ($_SERVER["REQUEST_METHOD"] === "GET") {

    $sql = "UPDATE request SET status=0 WHERE SA_ID = '$_GET[id]'";   // Update the status in request table   

    // ststus = 0 -> Request rejected
    // status = 2 -> Request Approved

    if ($con->query($sql) === TRUE) {

        header("Location: http://localhost/faculty_head/index.php?request_reject_successfully");

    } else {

        header("Location: http://localhost/faculty_head/index.php?request_reject_unsuccessful");

        echo 'Request Reject failed ';
    }

    $con->close();   // close the connection with database
    
}

?>



