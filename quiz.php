<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/quiz-style.css">
    <title>Quiz</title>
</head>
<body>
    <div class="steper">
        <ul class="progressbar">
          <li class="active">Welcome</li>
          <li id="result">Starting Test</li>
          <li>Result</li>
        </ul>
    </div>
    <div class="top-side">
        <div class="logo-Div">
            <img class="logo" src="./img/logo.png" alt="">
        </div>
        <h1>PHP Test</h1>
    </div>
    <div id="quiz">
        <h2>Hello <span id="span" style="color: gold;"></span></h2>
        <script>
            document.getElementById('span').innerHTML = localStorage.getItem("textvalue");
        </script>
        <h2 id="question"></h2>
        <div class="div-answer">
            <div class="answer">
                <input type="radio" id="ans0" name="questions">
                <label for="" id="answer0"></label>
            </div>
            <div class="answer">
                <input type="radio" id="ans1" name="questions">
                <label for="" id="answer1"></label>
            </div>
            <div class="answer">
                <input type="radio" id="ans2" name="questions">
                <label for="" id="answer2"></label>
            </div>
            <div class="answer">
                <input type="radio" id="ans3" name="questions">
                <label for="" id="answer3"></label>
            </div>
            <div class="submit">
                <button id="sumbit-button">Submit Answer</button>
                <p id="progress"></p>
            </div>
            <div id="spanDiv">

            </div>
        </div>
    </div>
    <script src="./Js_files/app.js" type="module"></script>
    <script src="./Js_files/questions.js"></script>
    <script src="./Js_files/control.js"></script>
</body>
</html>