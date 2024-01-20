<?php
$server="localhost";
$username="root";
$password="";
$dbname="uniassist";
$con = new mysqli($server,$username,$password,$dbname);

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  die('Failed to connect');
  exit();
}
?>