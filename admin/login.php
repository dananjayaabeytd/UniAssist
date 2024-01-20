<?php
session_start();


if (!(isset($_SESSION['S_ID']))) {
    header("Location: http://localhost/admin/login.php?message=not_authenticate");

    exit();
}



?>
<?php
session_start();

if (isset($_GET['message'])) {
    if($_GET['message']=='notmatch'){
        echo "<div class='error'>email and password do not match. Please try again.</div>";
    }elseif($_GET['message']=='tryagen'){
        echo "<div class='error'>try again.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <script src="https://kit.fontawesome.com/f7047bdca1.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;

        }

        .content {
            width: 100%;
            height: 100vh;
            display: flex;
        }

        .left,
        .right {
            flex: 6;
            padding: 20px;
            position: relative;
        }

        .left {
            background-color: rgb(165, 170, 170);
            display: flex;
            align-items: center;
            justify-content: center;
            /* background-image: url('https://img.freepik.com/premium-vector/gradient-glassmorphism-background_23-2149437416.jpg');
            background-size: cover; */

        }

        .right {
            background-color: rgb(222, 222, 222);
            display: flex;
            align-items: center;
            justify-content: center;
            animation-name: rightstart;
            animation-duration: 0.75s;
        }

        @keyframes rightstart {
            0% {
                right: -100vw;
            }

            100% {
                right: 0;
            }
        }


        .form {

            display: flex;
            flex-direction: column;


        }

        .input-group {
            text-align: left;
            margin-bottom: 13px;
        }

        .input-group label {
            margin-bottom: 50px;
        }

        .form input {
            width: 35vw;
            font-size: 18px;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 4px;
            margin-top: 4px;

        }

        .form-title {
            font-size: 30px;
            font-weight: bold;
            margin: auto;
        }

        a {
            text-decoration: none;
            color: black;

        }

        .brand {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 25px;
        }

        .brand .brand-icon {
            animation-name: iconstart;
            animation-duration: 3s;
        }

        @keyframes iconstart {
            0% {
                opacity: 0;
                scale: 2;
            }

            100% {
                opacity: 100%;
            }
        }

        .brand .barnd-title {
            font-size: 40px;
            font-weight: bold;
        }

        .brand p {
            font-size: 12px;
            color: rgb(77, 76, 76);
        }

        .error {
            background-color: darkred;
            color: white;
            font-weight: bold;
            position: fixed;
            z-index: 99;
            width: 100vw;
            text-align: center;
        }
        .success{
            background-color: darkgreen;
            color: white;
            font-weight: bold;
            position: fixed;
            z-index: 99;
            width: 100vw;
            text-align: center;
        }

        .password-container {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .fa-eye {
            display: none;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="left">
            <div class="brand">
                <img src="../auth/resources/img/brand.png" alt="img is missing" class="brand-icon">
                <div class="barnd-title">UniAssist</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque fuga asperiores tempore id, quam velit voluptatem at tempora atque.</p>
            </div>
        </div>
        <div class="right">
            <section id="login_form">
                <form action="../admin/action/login.php" class="form login-form" method="post" onsubmit="validateLoginForm()">
                    <div class="form-title">Admin Login</div>
                    <div class="input-group">
                        <label for="username">Username * : </label>
                        <br>
                        <input type="text" name="username" id="username" placeholder="hirushanka" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password * : </label>
                        <br>
                        <div class="password-container">
                            <input type="password" name="password" id="password" placeholder="********" required>
                            <span class="password-toggle" onclick="togglePasswordVisibility()">
                                <i class="fa-solid fa-eye" id="show_p_icon"></i>
                                <i class="fa-solid fa-eye-slash" id="hide_p_icon"></i>
                            </span>
                        </div>

                    </div>
                    <div class="input-group ">
                        <a href="#">Forgot password</a>
                    </div>
                    <div class="input-group">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </section>
            
        </div>
    </div>
</body>


<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        var showIcon = document.getElementById("hide_p_icon");
        var hideIcon = document.getElementById("show_p_icon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            showIcon.style.display = "none";
            hideIcon.style.display = "block";
        } else {
            passwordField.type = "password";
            showIcon.style.display = "block";
            hideIcon.style.display = "none";
        }
    }



    function validateLoginForm(e) {
            e.preventDefault(); // Prevent form submission
            
            // Get form inputs
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Perform validation
            if (username === "" || password === "") {
                alert("Please fill in all fields.");
                return false; // Block form submission
            }

            // Submit the form if validation passes
            return true;


        }

</script>



</html>
