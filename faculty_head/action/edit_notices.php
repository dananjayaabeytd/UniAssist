<?php
// Validate and process the submitted form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    include("../config/connection.php");
    $fid=$_POST["fid"];
    $ftitle = $_POST["ftitle"];
    $fmessage = $_POST["fmessage"];

    echo  $_POST["fid"];
    

    // $sql = "UPDATE notices SET N_Title='$ftitle' , N_Des='$fmessage'  WHERE N_No='$fid'";

    // if ($con->query($sql) === TRUE) {
    //     header("Location: http://localhost/faculty_head/index.php?message=update_notice_successfull");
    // } else {
    //     header("Location: http://localhost/faculty_head/index.php?message=update_notice_unsuccessfull");
    //     echo 'notices faild';
    // }

    // $con->close();
}
?>


