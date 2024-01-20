<?php



include("../config/connection.php");

//selecting data from facultyhead table
$sql = "SELECT * FROM facultyhead   

";


$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    $row = "No rows found.";
}

// Close the connection
mysqli_close($con);



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
    </div>
    <br>
    <div class="details">

        <div class="prfimg">
            <center>
                <img class="prfimage" src="../../student/resources/img/brand.png" alt="profile picture">
            </center>

        </div>


        <div class="academic">
            <center>
                <h2>Faculty Head Details</h2>
            </center>


            <?php


            //function to return the gender of the faculty head
            function Select_gender(){

                if($row['FH_Gender']='M'){
                    return 'Male';
                }
                else{
                    return 'Female';
                }

            } 
            

            // display the details of faculty head using echo statement
            echo "
            
            <b>Faculty ID :</b> " . $row['FH_ID'] . "<br>
            <b>Name :</b> " . $row['FH_Name'] . "<br>
            <b>address :</b> " . $row['FH_Address'] . " <br>
            <b>NIC :</b> " . $row['FH_NIC'] . "<br>
            <b>Date of Birth :</b> " . $row['FH_DOB'] . "<br>
            <b>Gender :</b> " . select_gender() . "<br>  
            
            ";


            ?>
        </div>




        </div>
    </div>

</body>

</html>