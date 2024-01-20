<?php
// Validate and process the submitted form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    include("../config/connection.php");

    $sql = "UPDATE system SET available=1 WHERE user = 'student'";

    if ($con->query($sql) === TRUE) {
        header("Location: http://localhost/super_admin/index.php?message=system_down_successful");
    } else {
        header("Location: http://localhost/super_admin/index.php?message=system_down_unsuccessful");
    }

    $con->close();
}
?>


