<!-- Tharindu Dananjaya -->

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .r_card{
            background-color: white;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .r_card .r_head{   
            display: flex;
            justify-content: space-between;
            padding: 10px;
            font-weight: bold;
            font-size: 18px;
        }
        .r_card .r_body{
            padding: 20px;
            font-size: 15px;
        }
        .action_buttons{
            border-top: 20px;
            display: flex;
            justify-content: flex-end;
            gap:30px;
        }
    </style>
</head>

<body>

    <div class="page-title">
        <spn class="page-main-title">System Request</spn>
    </div><br>

    <div class="Requests">

    <?php
            include '../config/connection.php';  // connect with the database

            $sql = "SELECT * FROM request where status= 1 "; // select only new requests from the table using SQL statements  (new request status = 1)

            $result = mysqli_query($con, $sql);  // store retrieved data to a PHP variable 

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

                // display retrieved data in HTML page using echo statement  
                echo "
                    <div class='r_card'>

                        <div class='r_head'>
                            <div class='r_title'>".$row['R_title']."</div>
                            <div class='r_date'>".$row['R_date']."</div>
                        </div>

                        <div class='r_body'>
                            ".$row['R_Des']."<br>

                            <div class='action_buttons'>

                                <a href='../../faculty_head/action/approve_system_request.php?id=$row[SA_ID]'><button class='btn'>Approve</button></a>
                                <a href='../../faculty_head/action/reject_system_request.php?id=$row[SA_ID]'><button class='btn'>Reject</button></a>

                            </div>

                        </div>

                    </div>
                ";
                }

            } else {

                echo "No rows found.";  // display if there are no requests to show

            }

            
            mysqli_close($con);  // close the connection with database

            ?>


        
        </div>
    </div>
</body>

</html>