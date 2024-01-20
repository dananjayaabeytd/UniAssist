<?php
//connection include
include("../config/connection.php");
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        .notices {
            border-radius: 8px;
            background-color: lightgray;
        }

        .notices .notice_header {
            display: flex;
            width: 100%;
            justify-content: space-around;
            border-bottom: 1px solid black;
        }

        .notices .tab_head {
            flex: 1;
            line-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .notices .notice_body {
            padding: 20px;
            min-height: 60vh;
        }

        .tab {
            display: none;
        }

        .tab-head {
            cursor: pointer;
        }

        .card {
            background-color: white;
            margin: 3px;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 13px;
        }

        .card .c_tite {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .card .c_date{
            margin-bottom: 3px;
            font-size: 10px;
            color: red;
        }
    </style>
    <script>
        function showTab(tabId) {
            var tabs = document.getElementsByClassName("tab");
            var tabHeads = document.getElementsByClassName("tab_head");

            for (var i = 0; i < tabs.length; i++) {
                tabs[i].style.display = "none";
                tabHeads[i].classList.remove("active");
            }

            var tab = document.getElementById(tabId);
            var tabHead = document.getElementById(tabId + "-head");

            if (tab && tabHead) {
                tab.style.display = "block";
                tabHead.classList.add("active");
            }
        }
    </script>
</head>

<body>
    <div class="notices">
        <div class="notice_header">
            <div id="architecture-head" class="tab_head active" onclick="showTab('architecture')">
                Architecture
            </div>
            <div id="computing-head" class="tab_head" onclick="showTab('computing')">
                Computing
            </div>
            <div id="business-head" class="tab_head" onclick="showTab('business')">
                Business
            </div>
            <div id="engineering-head" class="tab_head" onclick="showTab('engineering')">
                Engineering
            </div>
            <div id="humanities-head" class="tab_head" onclick="showTab('humanities')">
                Humanities & Sciences
            </div>
        </div>

        <div class="notice_body">
            <div id="architecture" class="tab" style="display: block;">
                <?php

                $sql = "SELECT * FROM notices WHERE F_Name = 'Architecture' ";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <div class='card'>
                            <div class='c_date'>" . $row['N_PostDate'] . "</div>
                            <div class='c_tite'>" . $row['N_Title'] . "</div>
                            <div class='c_body'>" . $row['N_Des'] . "</div>
                        </div>
                        ";
                    }
                } else {
                    $row = "No rows found.";
                }

                ?>
            </div>

            <div id="computing" class="tab">
                <?php

                $sql = "SELECT * FROM notices WHERE F_Name = 'Computing' ";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <div class='card'>
                                <div class='c_date'>" . $row['N_PostDate'] . "</div>
                                <div class='c_tite'>" . $row['N_Title'] . "</div>
                                <div class='c_body'>" . $row['N_Des'] . "</div>
                            </div>
                            ";
                    }
                } else {
                    $row = "No rows found.";
                }

                ?>
            </div>

            <div id="business" class="tab">
                <?php

                $sql = "SELECT * FROM notices WHERE F_Name = 'Business' ";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <div class='card'>
                                <div class='c_date'>" . $row['N_PostDate'] . "</div>
                                <div class='c_tite'>" . $row['N_Title'] . "</div>
                                <div class='c_body'>" . $row['N_Des'] . "</div>
                            </div>
                            ";
                    }
                } else {
                    $row = "No rows found.";
                }

                ?>
            </div>

            <div id="engineering" class="tab">
                <?php

                $sql = "SELECT * FROM notices WHERE F_Name = 'Engineering' ";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <div class='card'>
                            <div class='c_date'>" . $row['N_PostDate'] . "</div>
                            <div class='c_tite'>" . $row['N_Title'] . "</div>
                            <div class='c_body'>" . $row['N_Des'] . "</div>
                        </div>
                        ";
                    }
                } else {
                    $row = "No rows found.";
                }

                ?>
            </div>

            <div id="humanities" class="tab">
                <?php

                $sql = "SELECT * FROM notices WHERE F_Name = 'Humanities' ";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <div class='card'>
                                <div class='c_date'>" . $row['N_PostDate'] . "</div>
                                <div class='c_tite'>" . $row['N_Title'] . "</div>
                                <div class='c_body'>" . $row['N_Des'] . "</div>
                            </div>
                            ";
                    }
                } else {
                    $row = "No rows found.";
                }

                ?>
            </div>
        </div>

    </div>


    <script>
        // Show the first tab by default
        showTab('architecture');
    </script>
    <?php
    // Close the connection
    mysqli_close($con);

    ?>
</body>

</html>