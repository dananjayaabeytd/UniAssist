<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['FH_ID'])) {

    header("Location: http://localhost/faculty_head/");
    exit();

}


// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require("../config/connection.php");


    $username = $_POST['username'];
    $password = $_POST['password'];

    $s_sql = "SELECT FH_Username,FH_Username,FH_ID FROM facultyhead WHERE FH_Username = '$username' AND FH_Password = '$password'";

    $s_result = mysqli_query($con,$s_sql); 
    $s_count = mysqli_num_rows($s_result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($s_count == 1) {

        $row=mysqli_fetch_array($s_result);
        $_SESSION['FH_ID'] =$row['FH_ID'];
        header('location: http://localhost/faculty_head/');

      }

      else{
        
        echo 'notmatch';
        header('location: http://localhost/faculty_head/login.php?message=notmatch');

      }  
}
