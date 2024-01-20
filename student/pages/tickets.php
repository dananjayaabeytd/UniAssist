<!-- Tharindu Dananjaya -->

<!DOCTYPE html>

<html lang="en">

<head>

    <style>

        /* show ticket section */
        .btn {
            font-size: 15px;
            padding: 12px;
            border-radius: 4px;
            outline: none;
            border: none;
            background-color: rgb(48, 20, 127);
            color: white;
        }

        .tickets {
            width: 100%;
            margin-top: 15px;
        }

        .ticket {
            background-color: rgb(255, 255, 255);
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .ticket-head {
            display: flex;
            justify-content: space-between;
            font-size: 19px;
            padding: 10px;
            font-weight: bold;
            color: rgb(48, 20, 127);
        }

        .ticket-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            font-size: 14px;
            color: rgb(91, 91, 105);
        }


        /* submit  ticket section */
        #submit-ticket .form {

            padding: 20px;
            border-radius: 4px;
            background-color: white;
        }

        #submit-ticket .form .form-element {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        #submit-ticket .form .form-element input,
        #submit-ticket select,
        #submit-ticket button {
            font-size: 17px;
            padding: 10px;
            width: 100%;
        }
    </style>


</head>

<body>

    <section id="submit-ticket">


        <div class="page-title">
            <spn class="page-main-title">Ticket</spn> > <span class="page-sub-title">Submit a ticket</span>
        </div>
        <br>

        <form action="../../student/action/submit_ticket.php" class="form" method="post" onsubmit="return validateForm()"> <!-- Calling JS Function to validate form-->

            <div class="form-element">
                <label for="fsubject">Subject *</label>
                <input type="text" id="fsubject" name="fsubject">
            </div>

            <div class="form-element">
                <label for="fmessage">Message *</label>
                <textarea id="fmessage" name="fmessage" rows="4" cols="50"></textarea>
            </div>

            <div class="form-element">
                <input class="btn" type="reset" value="Reset">
                <button class="btn" onclick="cancelForm()">Cancel</button>
                <input class="btn" type="submit" value="Submit">
            </div>

        </form>

    </section>

    <section id="show-ticket">


        <div class="page-title">Ticket</div>
        <br>
        <button class="btn" onclick="switchsubmitform()">Submit a ticket</button>
        <div class="tickets">

            <?php

            session_start();  

            $S_ID=$_SESSION['S_ID'];    // get value of the student using session

            include '../config/connection.php' ;     // connect with the database

            $sql = "SELECT * FROM ticket where S_ID = '$S_ID'  ";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    

                    // store retrieved data from database into PHP variables 
                    $title = $row['T_title'];
                    $body = $row['T_Des'];
                    $status = $row['T_Status'];


                    // display retrieved data using echo statement

                    echo "
                    <div class='ticket'>
                        <div class='ticket-head'>
                            <div class='card-title'>
                                " . $title . "
                            </div>
                            <div class='ticket-status'>
                                " . $status . "
                            </div>
                        </div>
                        <div class='ticket-body'>
                            " . $body . "
                        </div>
                    </div>
                ";
                }
                
            } else {
                echo "No rows found.";   // display if there are no records to show 
            }

            // Close the connection with database
            mysqli_close($con);

            ?>

        </div>
    </section>


    <script>

        // implement functions using javascript to change between 2 sections    

        var showticket = document.getElementById("show-ticket");
        var submitticket = document.getElementById("submit-ticket");
        submitticket.style.display = "none";

        function switchsubmitform() {

            showticket.style.display = "none";
            submitticket.style.display = "block";

        }


                //  implement functions to validate the form 

                function validateForm() {

                    var subject = document.getElementById("fsubject").value;
                    var message = document.getElementById("fmessage").value;

                    if (subject === "" && message === "" ) {

                        alert("Please fill all the fields.");
                        return false;

                    }

                    if(subject === ""){

                        alert("Please fill the Subject Field");
                        return false;
                    }

                    if(messange === ""){
                        
                        alert("Please fill the message Field");
                        return false;

                    }

                    return true;

                    }

    </script>

</body>

</html>