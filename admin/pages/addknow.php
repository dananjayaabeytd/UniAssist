<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="addknowledge.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome include cdn -->
    <script src="https://kit.fontawesome.com/f7047bdca1.js" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

            :root{
            --basemargin:8px;
            --secondmargin:4px;
            --basecolor:rgb(26, 10, 70);
            --secondarycolor:rgb(231, 231, 231);
            }

            a{
            text-decoration: none;
            color: white;
            }


            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            html,
            body {
            margin: 0;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            }
            .container {
            display: flex;
            flex-direction: column;
            height: 100%;
            }
            .container .top-navbar{
                min-height: 10vh;
                background-color: rgb(26, 10, 70);
                color: rgb(255, 255, 255);
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0px 50px 0px 55px;
            }
            .barnd-icon{
            height: 40px;
            }
            .container .top-navbar .profile{
            border: 1px solid rgb(255, 255, 255);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            }
            .container .top-navbar .menu{
            font-size: 22px;
            display: none;

            }
            .container main {
            overflow: hidden;
            display: flex;
            }
            .container main .side-navbar {
            flex: 0 0 200px;
            background-color: rgb(241, 241, 241);
            min-height: 90vh;
            }
            .container main .side-navbar ul{
                list-style: none;
                padding: 0;  
                margin: 0;
            }
            .container main .side-navbar ul li{
                background-color: rgb(255, 255, 255);
                line-height: 60px;
                margin-bottom: 3px; 
                text-align: center;  
            }
            .container main .side-navbar ul li:hover{
                background-color: rgb(236, 235, 251);
                line-height: 60px; 
                text-align: center;  
            }
            .container main .side-navbar ul li a{
            text-decoration: none; 
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            color: rgb(73, 57, 117);
            font-size: 18px;
            font-weight: 600;
            }
            .active {
            font-weight: bold;
            color: rgb(45, 6, 104) !important;
            background-color: rgb(213, 215, 248) ;
            }

            .container main .main-content {
            display: flex;
            flex-direction: column;
            width: 100%;
            }
            .container main .main-content .content {
            overflow: auto;
            padding: 30px;
            background-color: rgb(231, 231, 231);
            width: 100%;
            min-height: 90vh;
            }

            .footer{
                text-align: center;
                background-color: rgb(231, 231, 231);
                color: gray;
            }

            /* mobile responce */
            @media screen and (max-width: 480px) {
                .container main .side-navbar {
                    position: fixed;
                    width: 60vw;
                    right: -320px;
                    transition: right 0.3s ease-in-out;
                }
                .container .top-navbar{
                padding: 0px 15px 0px 15px;
                }
                .container .top-navbar .menu{
                display: block;
                }
                
            }



            .page-title{
            font-size: 19px;
                font-weight: bold;
                display: flex;
                gap:30px;
                color: gray;
            }
            .page-title .page-main-title{
            color: rgb(85, 63, 146);;
            }
            .page-title .page-sub-title{
            color: rgb(48, 20, 127);
            }

            .profile:hover{
            /* cursor: pointer;  */
            /*  background-color: rgb(255, 255, 255);*/
            color: var(--basecolor);
            }


            /* button format */
            .btn{
            font-size: 15px;
            padding: 12px;
            border-radius: 4px;
            outline: none;
            border: none;
            background-color:  rgb(48, 20, 127);
            color: white;
            }

            .flex{
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap:20px;
            
            }


            .nav{
            color: black;
            }


            .knowledgebase{
            background-color: rgb(255, 255, 255);
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            height: 525px;

            }

            .tinput{
            height: 30px;
            width:90%;
            padding: 20px;
            }

            .btn{
            margin: 10px;
            float:right;
            border-radius: 4px;
            width: 80px;

            }



    </style>
</head>

<body>
    
    <div class="container">
        
        <main>

            <div class="main-content">


                <div class="content">
                   <!-- <a href="" class="nav">Knowledgebase</a> >
                    <a href="" class="nav">Add a Knowledgebase</a> -->


                    <section id="add-knowledgebase">

                            <div class="knowledgebase">
                                <form action="../admin/action/add.php" method="POST">
                                <label for=""><b>Problem Title *</b></label> <br>
                                <input class="tinput" type="text" name="title"> <br> <br>

                                <label for=""><b>Problem Description *</b></label> <br>
                                <textarea name="description" id="" cols="150" rows="8"></textarea>
                                <br> <br>



                                <input class="btn" type="submit" onclick="switchsubmitform()" value="Add">
                                </form>
                            </div>
                    </section>

                    <!-- <section id="display-knowledgebase">
                                        <div class="page-title">Knowledgebase</div>
                                        <br>
                                <button class="btn" onclick="switchsubmitform()">Add a Knowledgebase</button>
                                <div class="tickets">
                                    <?php
                                    include("../config/connection.php");

                                    $sql = "SELECT * FROM knowledgebase /*where k_no = '1' */ ";
                                    $result = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($result) > 0) {

                                        while ($row = mysqli_fetch_assoc($result)) {

                                            // Access individual columns using $row['column_name']
                                            $title = $row['k_title'];
                                            $des = $row['k_des'];
                                            $solution = $row['k_sol'];


                                            // Output the row data in HTML table format 
                                            //methanin pahala thyena tika hadanna mn admin profile eken data ganna tika hadannam oayage
                                            echo "
                                            <div class='kb'>   
                                                <div class='ticket-head'>
                                                    <div class='card-title'><b>
                                                        " . $title . "</b>
                                                    </div>
                                                    <div class='ticket-status'> 
                                                        " . $des . "
                                                    </div>
                                                </div>
                                                <div class='ticket-body'>
                                                    " . $solution . "
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

                    </section> -->


                </div>
            </div>
            <script>
                    var showknowledgebase = document.getElementById("showknowledgebase");
                    var addknowledgebase = document.getElementById("add-knowledgebase");
                    addknowledgebase.style.display = "none";

                    function switchsubmitform() {
                        showknowledgebase.style.display = "none";
                        addknowledgebase.style.display = "block";
                    }


        
             </script>





        </main>
        <footer class="footer">
             @ 2023  UniAssist . All rights reserved.
        </footer>
    </div>

    <script src="./dashboard.js"></script>
</body>

</html>