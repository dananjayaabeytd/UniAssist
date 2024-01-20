<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .ksearch-bar {
            width: 100%;
            font-size: 17px;
            padding: 10px;
            outline: none;
            border: none;
            border-radius: 4px;
            margin-bottom: 30px;
        }

        .kcard {
            background-color: white;
            border-radius: 4px;
            padding: 20px;
            margin-bottom: 14px;
            display: none;
        }

        .kcard-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .kcard-body {
            font-size: 14px;
            color: rgb(68, 68, 68);
        }

        .Category {
            background-color: white;
            padding: 20px;
        }

        .Category .group {
            line-height: 20px;
            font-size: 20px;
            padding: 20px;
            background-color: rgb(237, 237, 237);
            margin-bottom: 5px;
        }

        .Category .group .group-title {
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            width: 100%;
            cursor: pointer;
        }

        .group-list {
            padding: 20px;
            font-size: 13px;
        }

        .hide {
            display: none;
        }

        .show {
            display: block;
        }
    </style>
</head>

<body>

    <div class="page-title">
        <spn class="page-main-title">Knowledgebase</spn>
    </div>
    <br>
    <input type="text" class="ksearch-bar" placeholder="How can we help you today ?" onkeyup="filterCards(event)">
    <div class="view">
        <div class="kcard">
            <div class="kcard-title">
                post 1
            </div>
            <div class="kcard-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nostrum, iusto aspernatur ex sequi, eos ipsum, magni beatae adipisci id praesentium excepturi. Deleniti, beatae non id asperiores incidunt minus quas sunt excepturi eos quibusdam quasi, velit dolores blanditiis! Porro aliquam incidunt facere placeat perspiciatis unde vel necessitatibus suscipit, maxime eligendi.
            </div>
        </div>

        <div class="kcard">
            <div class="kcard-title">
                post 2
            </div>
            <div class="kcard-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nostrum, iusto aspernatur ex sequi, eos ipsum, magni beatae adipisci id praesentium excepturi. Deleniti, beatae non id asperiores incidunt minus quas sunt excepturi eos quibusdam quasi, velit dolores blanditiis! Porro aliquam incidunt facere placeat perspiciatis unde vel necessitatibus suscipit, maxime eligendi.
            </div>
        </div>



        <div class="Category">
            <h1>Category</h1>
            <br>
            <div class="group">
                <div class="group-title">General (22) <i class="fa-solid fa-caret-down"></i></div>
                <div class="group-list hide">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla fugit voluptatibus quibusdam, officia rem neque esse cum consectetur qui excepturi?
                </div>
            </div>
            <div class="group">
                <div class="group-title">General (22) <i class="fa-solid fa-caret-down"></i></div>
                <div class="group-list hide">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla fugit voluptatibus quibusdam, officia rem neque esse cum consectetur qui excepturi?
                </div>
            </div>
            <div class="group">
                <div class="group-title">General (22) <i class="fa-solid fa-caret-down"></i></div>
                <div class="group-list hide">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla fugit voluptatibus quibusdam, officia rem neque esse cum consectetur qui excepturi?
                </div>
            </div>
        </div>
    </div>

    <script>
        // category troggle   mechanism
        document.querySelectorAll(".group").forEach((element) => {
            element.addEventListener("click", () => {
                element.querySelector(".group-title i").classList.toggle("fa-rotate-180");
                element.querySelector(".group-list").classList.toggle("hide");
            })
        });


        function filterCards(event) {
            var searchTerm = event.target.value.toLowerCase(); // Convert search term to lowercase for case-insensitive matching

            var cards = document.getElementsByClassName('kcard');

            for (var i = 0; i < cards.length; i++) {
                var card = cards[i];
                var title = card.getElementsByClassName('kcard-title')[0].textContent.toLowerCase();

                // Check if the search term is found in the title or body of the card
                if (title.includes(searchTerm)) {
                    card.style.display = 'block'; // Show the card
                } else {
                    card.style.display = 'none'; // Hide the card
                }
            }
        }
    </script>

</body>

</html>