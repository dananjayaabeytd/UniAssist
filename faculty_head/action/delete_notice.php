<!-- Tharindu Dananjaya -->

<?php

include '../config/connection.php';  // connect with the database

if ($_SERVER["REQUEST_METHOD"] === "GET") {

    $sql = "DELETE FROM notices  WHERE N_No= '$_GET[id]'"; // delete record in tabale using SQL statement

    if ($con->query($sql) === TRUE) // checking whether statement is executed 
    {

        header("Location: http://localhost/faculty_head/index.php?message=delete_notice_successfull");

    } else {

        header("Location: http://localhost/faculty_head/index.php?message=delete_notice_unsuccessfull");
    }

    $con->close();  // close the connection with database 
}

?>