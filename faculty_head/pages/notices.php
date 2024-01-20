<!-- Tharindu Dananjaya -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .notice {
            background-color: rgb(255, 255, 255);
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .notice-head {
            display: flex;
            justify-content: space-between;
            font-size: 19px;
            padding: 10px;
            font-weight: bold;
            color: rgb(48, 20, 127);
        }

        .notice-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            font-size: 14px;
            color: rgb(91, 91, 105);
        }

        #fullpage {
            display: none;
        }
        
        .btn{
            margin-right: 20px;
        }
        .fullpage p {
            margin-bottom: 20px;
            font-size: 20px;
        }

        .buttons {
            display: flex;
            justify-content: space-evenly;
        }

        .buttons .btn {
            font-size: 19px;
            background-color: #1a0a46;
            color: white;
            margin: 10px;
        }

        #add_Notice {
            background-color: white;
            padding: 20px;
            border-radius: 4px;
            display: none;
        }

        #add_Notice .form-element input,
        #add_Notice .form-element textarea {
            width: 100%;
            line-height: 2rem;
            margin: 3px;
            padding: 10px;
            font-size: 14px;
        }

        #edit_notices {
            display: none;
        }
        #edit_notices {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
        }
        #edit_notices .form-element{
            margin-bottom: 20px;
        }
        #edit_notices .form-element input ,#edit_notices .form-element textarea{
            width: 100%;
            padding: 5px;
            font-size: 20px;
            
        }

        
    </style>
</head>

<body>
    
    <section id="show_notices">

        <section id="notices">

            <div class="page-title">Notices</div><br>

            <button class="btn" onclick="switchaddnotics()">Add Notice</button><br><br>

            <div class="notices">

                <?php

                include '../config/connection.php ';

                $sql = "SELECT * FROM notices where author = 'AD0001'  ";  // get the data from table in database

                $result = mysqli_query($con, $sql);   

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        // store retrieved data into PHP variables

                        $N_No = $row['N_No'];
                        $title = $row['N_Title'];
                        $body = $row['N_Des'];
                        $date = $row['N_PostDate'];

                        // display retrieved data using echo statement

                        echo "
                    <div class='notice' id='notice'>
                        <div class='notice-head'>
                            <div hidden  id='data_id'>
                                <div id='fid'> " . $N_No . " </div>
                            </div>
                            <div class='card-title' id='data'>
                               <div id='ftitle'> " . $title . " </div>
                            </div>
                            <div class='notice-date' id='data '>
                                     " . $date . " 
                            </div>
                        </div>
                        <div class='notice-body' id='data'>
                        <div id='fdes'> " . $body . " </div>
                        </div>
                    </div>
                ";
                    }
                } else {
                    echo "No rows found.";
                }

                // close te connection with database
                mysqli_close($con);

                ?>

            </div>
        </section>
        <section id="fullpage">
            <div class="page-title">Notices > Notice</div><br>

            <div class="fullpage">
            </div>

            

        </section>
    </section>

    <section id="add_Notice">
        <div class="page-title">Notices > add Notices</div>
        <br>
        <form action="../../faculty_head/action/add_notices.php" method="POST">
            <div class="form-element">
                <label for="ftitle">Title *</label>
                <input type="text" name="ftitle" id="ftitle" required>
            </div>
            <div class="form-element">
                <label for="fmessage">Message *</label>
                <textarea name="fmessage" id="fmessage" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-element">
                <input type="submit" class="btn" value="Add Notices">
            </div>
        </form>
    </section>
    <section id="edit_notices">
        <h1>edit notice</h1>
        <form action="../../faculty_head/action/edit_notices.php" method="POST">
            <div class="form-element">
                <label for="fid">Title *</label>
                <input hidden type="text" name="fid" id="fid" >
            </div>
            <div class="form-element">
                <label for="ftitle">Title *</label>
                <input type="text" name="ftitle" id="ftitle" >
            </div>
            <div class="form-element">
                <label for="fmessage">Message *</label>
                <textarea name="fmessage" id="fmessage" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-element">
                <button type="submit" class="btn">Edit Notices</button>
            </div>
        </form>
    </section>

    <script>

        // using javascript delete a notice
        var notices = document.querySelectorAll("#notice");

        // geting all the notices using loop
        notices.forEach((notice) => {

            notice.addEventListener("click", (e) => {

                // diplay sections seperately 
                document.getElementById("notices").style.display = "none";
                document.getElementById("fullpage").style.display = "block";

                var insidedata = notice.querySelectorAll('#data');
                var id = notice.querySelector("#data_id").textContent.toString().trim();
                console.log(id.textContent);

                insidedata.forEach((i) => {

                    var p = document.createElement("p");
                    var text = i.textContent;
                    p.textContent = text;
                    document.querySelector("#fullpage .fullpage").appendChild(p);

                });

                var delete_btn = document.createElement("button");
                delete_btn.textContent = "delete";
                delete_btn.classList.add("btn");

                delete_btn.addEventListener("click", function() {

                    window.location.href = '../../faculty_head/action/delete_notice.php?id=' + id;

                });


                document.querySelector("#fullpage .fullpage").appendChild(delete_btn);


            });
        });



        function switchaddnotics() {

            // display 2 sections seperately

            var show_notices = document.getElementById("show_notices");
            var add_notices = document.getElementById("add_Notice");

            
            show_notices.style.display = "none";
            add_notices.style.display = "block";

        }

    </script>
</body>

</html>