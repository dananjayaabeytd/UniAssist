<?php
// Validate and process the submitted form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $ftitle = $_POST["ftitle"];
    $fmessage = $_POST["fmessage"];
    $N_No='N'.rand();
    // Additional processing can be done here (e.g., file upload)

    include("../config/connection.php");

    $sql = "INSERT INTO notices ( N_No,N_Title, N_Des, N_PostDate ,author,F_Name)
            VALUES ('$N_No','$ftitle','$fmessage','2023-05-20', 'AD0001', 'AD0001')";

    if ($con->query($sql) === TRUE) {
        header("Location: http://localhost/faculty_head/index.php?message=add_notices");
    } else {
        header("Location: http://localhost/faculty_head/index.php?message=faild");
        echo 'notices faild';
    }

    $con->close();
}
?>


