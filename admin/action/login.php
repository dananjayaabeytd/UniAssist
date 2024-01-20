<?php
session_start();

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require("../config/connection.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $s_sql = "SELECT Ad_Username,Ad_Password,Ad_ID FROM admin WHERE Ad_Username = '$username' AND Ad_Password = '$password'";
    $s_result = mysqli_query($con, $s_sql);
    $s_count = mysqli_num_rows($s_result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($s_count == 1) {
        $row=mysqli_fetch_array($s_result);
        $_SESSION['Ad_ID'] = $row['Ad_ID'];
        header('location: http://localhost/admin/');


    } else {
        echo 'login faild';
        header('location: http://localhost/admin/login.php?message=notmatch');
    }
}
