<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['S_ID'])) {
    header("Location: http://localhost/super_admin/");
    exit();
}


// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require("../config/connection.php");


    $username = $_POST['username'];
    $password = $_POST['password'];

    $s_sql = "SELECT SA_Username,SA_Password,SA_ID FROM superadmin WHERE SA_Username = '$username' AND SA_Password = '$password'";
    $s_result = mysqli_query($con,$s_sql); 
    $s_count = mysqli_num_rows($s_result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($s_count == 1) {
        $row=mysqli_fetch_array($s_result);
        $_SESSION['SA_ID'] =$row['SA_ID'];
        header('location: http://localhost/super_admin/');
      }
      else{
          header('location: http://localhost/super_admin/login.php?message=notmatch');
      }  
}
