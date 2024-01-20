<?php
// Wait for 5 minutes (300 seconds)
sleep(3);

// Perform redirect
header("Location: http://localhost/student/index.php?message=faild_to_task");
exit;
?>
