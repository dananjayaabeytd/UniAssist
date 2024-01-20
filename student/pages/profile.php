<?php


session_start();
$S_ID=$_SESSION['S_ID'];   // get the student id from the session start



include("../config/connection.php");  // connect with the database


// get the data from the database

$sql = "SELECT student.*, studemail.S_Email,studphone.S_Tel  
FROM student
JOIN studemail ON student.S_ID = studemail.S_ID 
JOIN studphone ON student.S_ID = studphone.S_ID
WHERE student.S_ID = '$S_ID';
";


$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);    

} else {
    $row = "No rows found.";
}


mysqli_close($con);   // Close the connection

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .details {
            height: auto;
            background-color: white;
            border-radius: 8px;
            margin-left: 100px;
            margin-right: 100px;
            padding-bottom: 10px;
        }

        .prfimage {
            height: 270px;
            border-radius: 50%;
            margin-top: 30px;
        }

        .academic {
            margin-left: 30px;
            margin-top: 30px;
            line-height: 2.0;
        }

        .personal {
            margin-left: 30px;
            margin-top: 30px;
            line-height: 2.0;
        }

        .editbtn {
            cursor: pointer;
            float: right;
            border-radius: 4px;
            outline: none;
            border: none;
            background-color: rgb(48, 20, 127);
            color: white;
            height: 40px;
            width: 100px;
            margin-right: 50px;
        }
    </style>
</head>

<body>

    <div class="page-title">
        <spn class="page-main-title">Profile</spn>
    </div><br>

    <div class="details">

        <div class="prfimg">
            <center>
                <img class="prfimage" src="../../student/resources/img/brand.png" alt="profile picture">
            </center>
        </div>


        <div class="academic">

            <center>
                <h2>Student Details</h2>
            </center>


            <?php

             //function to return the gender of the student
             function gender(){

                if($row['S_Gender']='F'){
                    return 'Female';
                }
                else{
                    return 'Male';
                }

            } 


            // display retrieved data using echo statement

            echo "
            
            <b>Student ID :</b> " . $row['S_ID'] . "<br>
            <b>Name :</b> " . $row['S_Name'] . "<br>
            <b>Gender :</b> " . gender() . "<br>
            <b>Course :</b> " . $row['C_ID'] . "<br>
            <b>Academic year : </b>" . $row['S_AcademicYR'] . " <br>
            <b>Date of Birth : </b> " . $row['S_DOB'] . "<br>
            <b>NIC : </b> " . $row['S_NIC'] . " <br>
            <b>University Email : </b>" . $row['S_Email'] . " <br>
            <b>Citizen Type: </b> " . $row['S_Citizen'] . "  <br>
            <b>Mobile No : </b> " . $row['S_Tel'] . "<br>
            <b>Address : </b> " . $row['S_Street'] ." ". $row['S_District'] . " <br>
            <b>City : </b> " . $row['S_City'] . "<br>
            <b>District : </b> " . $row['S_District'] . "<br>
            <b>Province : </b> " . $row['S_Province'] . " Province<br>
            
            ";

            ?>

        </div>


        </div>
    </div>

</body>

</html>