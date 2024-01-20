<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['S_ID'])) {
    header("Location: http://localhost/student/");
    exit();
}


// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require("../config/connection.php");


    $username = $_POST['username'];
    $password = $_POST['password'];

    $s_sql = "SELECT S_Username,S_Password,S_ID FROM student WHERE S_Username = '$username' ";
    $s_result = mysqli_query($con,$s_sql); 
    $s_count = mysqli_num_rows($s_result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($s_count == 1) {
        while($row=mysqli_fetch_array($s_result)){
            if(password_verify($password,$row['S_Password'])){
                $_SESSION['S_ID'] =$row['S_ID'];
                header('location: http://localhost/student/');
            }else{
                header('location: http://localhost/auth/login.php?message=notmatch');
            }
        }
        
      }
      else{
        echo 'notmatch';
          header('location: http://localhost/auth/login.php?message=notmatch');
      }  
}
