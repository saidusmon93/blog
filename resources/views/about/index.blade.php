<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Faster+One&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        background-image: url(../.././assets/front/images/background/hour.jpg);
        background-position: center;
        background-size: cover;
        -webkit-animation: backgradient 30s ease infinite;
        -moz-animation: backgradient 30s ease infinite;
        animation: backgradient 30s ease infinite;
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        font-size: 25px;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }
      #timer {
        font-family: "Faster One", cursive;
        font-size: 3em;
        font-weight: bold;
        color: rgba(3, 3, 3, 0.5);
      }

      @-webkit-keyframes backgradient {
        0% {
          background-position: 74% 0%;
        }
        50% {
          background-position: 27% 100%;
        }
        100% {
          background-position: 74% 0%;
        }
      }
      @-moz-keyframes backgradient {
        0% {
          background-position: 74% 0%;
        }
        50% {
          background-position: 27% 100%;
        }
        100% {
          background-position: 74% 0%;
        }
      }
      @keyframes backgradient {
        0% {
          background-position: 74% 0%;
        }
        50% {
          background-position: 27% 100%;
        }
        100% {
          background-position: 74% 0%;
        }
      }
    </style>
  </head>
  <body>
    <div id="timer"></div>
    <script>
      function reverseCount(days) {
        let totalSeconds = days * 24 * 3600 - 5000;

        let timer = setInterval(function () {
          let daysLeft = Math.floor(totalSeconds / (24 * 3600));
          let hoursLeft = Math.floor(
            (totalSeconds - daysLeft * 24 * 3600) / 3600
          );
          let minutesLeft = Math.floor(
            (totalSeconds - daysLeft * 24 * 3600 - hoursLeft * 3600) / 60
          );
          let secondsLeft =
            totalSeconds -
            daysLeft * 24 * 3600 -
            hoursLeft * 3600 -
            minutesLeft * 60;

          let time = `${daysLeft.toString().padStart(2, "0")}:${hoursLeft
            .toString()
            .padStart(2, "0")}:${minutesLeft
            .toString()
            .padStart(2, "0")}:${secondsLeft.toString().padStart(2, "0")}`;
          document.getElementById("timer").textContent = time;

          if (totalSeconds === 0) {
            clearInterval(timer);
          }
          totalSeconds--;
        }, 1000);
      }

      reverseCount(3);
    </script>
  </body>
</html>
