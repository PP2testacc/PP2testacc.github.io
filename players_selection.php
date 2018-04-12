<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zARi</title>

    <!-- CSS & CUSTOM FONTS -->
    <link href="css/styles.css" rel="stylesheet" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body>

    <div class="container">
        <img class="logo small" src="images/logo.png" alt="">
        <h1 class="small">zARi</h1>
        <a class="one btn" href="enter_name_single.php">SINGLE PLAYER</a>
        <a class="two btn" href="#">TWO PLAYERS</a>
        <div class="icons-container">
            <span id="microphone"><i class="fas fa-microphone"></i></span>
            <span id="speaker"><i class="fas fa-volume-up"></i></span>
        </div>
    </div>









    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script src="http://code.responsivevoice.org/responsivevoice.js"></script>

    <script>
        $(document).ready(function() {

            $("#speaker").click(function() {
                responsiveVoice.speak("You can click the single player button to play alone. Or click the two players button to play with a friend.", "UK English Female", {
                    rate: 0.8
                });
            });


            $("#microphone").click(function() {

                responsiveVoice.speak("There are two available commands. Single Player. to play alone.or. Two players. to play with a friend.", "UK English Female", {
                    rate: 0.9
                });

                var recognition = new(window.SpeechRecognition || window.webkitSpeechRecognition || window.mozSpeechRecognition || window.msSpeechRecognition)();
                recognition.lang = 'en-US';
                recognition.interimResults = false;
                recognition.maxAlternatives = 5;

                setTimeout(function() {
                    recognition.start();
                }, 8000);

                recognition.onresult = function(event) {
                    var word = event.results[0][0].transcript;

                    if (word === "single player") {
                        $(location).attr("href", "enter_name_single.php");

                    } else {
                        responsiveVoice.speak("Unknown commands, please try again!", "UK English Female", {
                            rate: 0.9
                        });
                    }
                };
            });


        });

    </script>

</body>

</html>
