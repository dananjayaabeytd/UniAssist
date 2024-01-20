<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .details {
            width: 100%;
            background-color: white;
            border-radius: 4px;
            padding: 20px;
        }

        .details .item {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .profile-picture {
            border-radius: 50%;

        }
    </style>
</head>

<body>
    <div class="page-title">
        <spn class="page-main-title">Profile</spn>
    </div>
    <br>
    <div class="details">
        <?php
        include("../config/connection.php");
        $sql = "SELECT S_ID,S_Name,S_Gender,S_DOB,S_Username,S_Citizen,S_NIC,S_AcademicYR,S_Type,S_HouseNo,S_Street,S_City,S_District,S_Province,C_ID FROM student where S_ID = 'IT00000001'  ";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            
            echo "
            <img class='profile-picture' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPUHqOb8udnIHWU_W8vov0qdod-X-nEF4eAS0Z0ezzBMzCUW3kbVVpVad4Jy0rePghNdE&usqp=CAU' alt='student picture'>
            <div class='item'>Student ID : ".$row['S_ID']." </div>
            <div class='item'>Name : ".$row['S_Name']."</div>
            <div class='item'>Faculty : ".$row['C_ID']."</div>
            <div class='item'>Course : BSc (Hons) in Information Technology</div>
            <div class='item'>Campus : ".$row['S_District']."</div>
            <div class='item'>Semester : ".$row['S_AcademicYR']."</div>
            <div class='item'>Student Name: ".$row['S_Name']."</div>
            <div class='item'>Date Of Birth: ".$row['S_DOB']."</div>
            <div class='item'>NIC : ".$row['S_NIC']."</div>
            <div class='item'>Gender : ".$row['S_Gender']." </div>
            <div class='item'>Personal Email : samx@gmail.com</div>
            <div class='item'>University Email : ITDFGF343434@uni.lk</div>
            <div class='item'>Citizen Type : ".$row['S_Citizen']."</div>
            <div class='item'>Mobile No : 07777777777</div>
            <div class='item'>Address : 1234/B 19th lane , XXXX road.</div>
            <div class='item'>Province : ".$row['S_Province']."</div>
            <div class='item'>District : ".$row['S_City']."</div>
            <br>
            ";
        } else {
            echo "No rows found.";
        }

        // Close the connection
        mysqli_close($con);



        ?>

    </div>

</body>

</html>