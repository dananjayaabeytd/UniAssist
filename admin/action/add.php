<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Retrieve data from the form
    
    $title= $_POST['title'];
    $description=$_POST['description'];


    include("../config/connection.php");  // connect with the database

    $sql = "INSERT INTO knowledgebase (K_No, K_Des, K_Title, Ad_ID) VALUES ('KB1', '$description' , '$title' , 'AD0001')";

    if ($con->query($sql) === TRUE) {

        header("Location: http://localhost/admin/index.php?message=knowledgebase_added_successfully");

    } else {

        header("Location: http://localhost/admin/index.php?knowledgebase_add_usuccessful");

    }

    $con->close(); // close the connection
}
?>




