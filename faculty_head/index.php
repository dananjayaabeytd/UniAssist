<?php
session_start();


if (!(isset($_SESSION['FH_ID']))) {
    header('location: http://localhost/faculty_head/login.php?message=notlogin');
}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./resources/css/dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome include cdn -->
    <script src="https://kit.fontawesome.com/f7047bdca1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Student</title>
    <style>
       
        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            top:100;
            height: 100vh;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 0.5s;
            animation-name: animatebottom;
            animation-duration: 0.5s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                top: -100px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        #myDiv {
            display: none;
        }

        #loader{
            width: 100vw;
            height: 100vh;
            color: #1a0a46;
            font-size: 25px;
            display: flex;
            background-color: #e7e7e7;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            animation-name: loading;
            animation-duration: 1s;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
        }
        #loader img{
            width: 400px;
            height: auto;
        }
        @keyframes loading{
            0%{
                opacity: 0;
            }
            100%{
                opacity: 1;
            }
        }
    </style>
</head>

<body onload="myFunction()">

    <div id="loader">
        <img src="../student/resources/img/brand.png" alt="">
        <br>
        loading....
    </div>

    <div style="display:none;" id="myDiv" class="animate-bottom">
        <div class="container">
            <?php include("./resources/components/topnavbar.php") ?>
            <main>
                <?php include("./resources/components/sidenavbar.php") ?>
                <div class="main-content">
                    <div class="content">

                    </div>
                </div>
            </main>
            <?php include("./resources/components/footer.php") ?>
        </div>

    </div>
    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 2000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>
    <script src="./resources/js/dashboard.js"></script>
</body>

</html>