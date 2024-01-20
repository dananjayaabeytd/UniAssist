
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
        <form action="../../student/action/submit_ticket.php" class="form" method="post">
            <div class="form-element">
                <label for="fname">Name *</label>
                <input type="text" id="fname" name="fname">
            </div>
            <div class="form-element">
                <label for="fname">Registration No *</label>
                <input type="text" id="fname" name="fname">
            </div>
            <div class="form-element">
                <label for="femail">Email *</label>
                <input type="email" id="femail" name="femail">
            </div>
            <div class="form-element">
                <label for="fnumber">Contact No *</label>
                <input type="number" id="fnumber" name="fnumber">
            </div>
            <div class="form-element">
                <label for="ffaculty">Faculty *</label>
                <select id="ffaculty" name="ffaculty">
                    <option value="1">computer Faculty</option>
                    <option value="1">bunessis Faculty</option>
                </select>
            </div>
            <div class="form-element">
                <label for="fsubject">Subject *</label>
                <input type="text" id="fsubject" name="fsubject">
            </div>
            <div class="form-element">
                <label for="fmessage">Message *</label>
                <input type="text" id="fmessage" name="fmessage">
            </div>
            <div class="form-element">
                <label for="fattachment">Add Attachment</label>
                <input type="file" id="fattachment" name="fattachment">
            </div>
            <div class="form-element">
                <input class="btn" type="reset" value="reset">
                <button class="btn">Cancel</button>
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
            include("../config/connection.php");
            $sql = "SELECT * FROM ticket where S_ID = 'IT00000001'  ";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    // Access individual columns using $row['column_name']
                    $title = $row['T_title'];
                    $body = $row['T_Des'];
                    $status = $row['T_Status'];


                    // Output the row data in HTML table format
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
                echo "No rows found.";
            }

            // Close the connection
            mysqli_close($con);

            ?>

        </div>
    </section>


    <script>
        var showticket = document.getElementById("show-ticket");
        var submitticket = document.getElementById("submit-ticket");
        submitticket.style.display = "none";

        function switchsubmitform() {
            showticket.style.display = "none";
            submitticket.style.display = "block";
        }


        
    </script>
</body>

</html>