<?php


session_start();
unset($_SESSION['FH_ID']);
header("Location: http://localhost/faculty_head/login.php");
exit();


?>