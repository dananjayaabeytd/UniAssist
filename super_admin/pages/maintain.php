<!-- Ishara Sandaruwan -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .maintain {
            width: 100%;
            background-color: white;
            padding: 20px;
            border-radius: 4px;
            min-height: 70vh;
        }

        .s_form {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 70vh;
        }

        .s_btn {
            background-color: #1a0a46;
            font-size: 18px;
            color: white;
            width: 200px;
            height: 200px;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <div class="maintain">

        <div class="page-title">
            <spn class="page-main-title">maintain</spn>
        </div>

        <?php
                include("../config/connection.php");  // connect with the database

                $sql = "SELECT * FROM system WHERE user = 'student' AND available = 1 ";  // get data from database using SQL statements

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo "
                        <form action='../../super_admin/action/system_down.php' class='s_form' method='post'>
                            <input type='submit' class='s_btn' value='system down'>
                        </form>
                        ";     // button to shut down the system

                } else {
                    echo "
                        <form action='../../super_admin/action/system_up.php' class='s_form' method='post'>
                            <input type='submit' class='s_btn' value='system Up'>
                        </form>
                        ";    // button to up the system 
                }

        ?>
        
    </div>
</body>

</html>