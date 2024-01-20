<!-- Ishara Sandaruwan -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .inform{
            width: 100%;
            padding: 20px;
            background-color: white;
            border-radius: 4px;
            min-height: 70vh;
        }
        .form-element {
            width: 100%;
            margin-bottom: 10px;
        }
        .form-element input{
            width: 100%;
            font-size: 18px;
            padding: 10px;
            line-height: 24px;
        } 
    </style>
</head>

<body>
    <div class="inform">

        <div class="page-title">
            <spn class="page-main-title">inform</spn>
        </div><br><br>

        <form action="../../super_admin/action/inform.php" method="post" onsubmit=" return validateform()"> <!-- calling function to validate the form -->

            <div class="form-element">
                <label for="ftitle">Subject *</label>
                <input type="text" id="ftitle" name="ftitle">
            </div>

            <div class="form-element">
                <label for="fmessage">Message *</label>
                <input type="text" id="fmessage" name="fmessage">
            </div>

            <div class="form-element">
                <input type="submit" class='btn' value="submit">
            </div>

            <div class="form-element">
                <input type="reset" class='btn' value="reset">
            </div>

        </form>

    </div>




    <script>


    // implement function to validate the form

    function validateform(){

        var title = document.getElementById("ftitle").value;
        var message = document.getElementById("fmessage").value;
        
        if(title===""){

            alert("Subject field cannot be empty.");
            return false;

        }

        if(message===""){

            alert("Message field cannot be empty.");
            return false;

        }

        else{
            return true;
        }
        
        //allow submission of the form

    }



</script>


</body>

</html>