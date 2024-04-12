<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "preppros";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT question_id, question, opt1, opt2, opt3, opt4, correct_ans FROM aptitude_test ORDER BY RAND() LIMIT 20";


$stmt = $conn->prepare($sql);


$stmt->execute();


$result = $stmt->get_result();

$quizArray = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        $quizArray[] = $row;
    }
} else {
    echo "0 results";
}

$stmt->close();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App using PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="start-screen">
        <button id="start-button">Start</button>
    </div>

    <div id="display-container" class="hide">
        <div class="header">
            <div class="number-of-count">
                <span class="number-of-question">1 of <?php echo count($quizArray); ?> questions</span>
            </div>
            <div class="timer-div">
                <img src="https://uxwing.com/wp-content/themes/uxwing/download/time-and-date/stopwatch-icon.png" width="20px" />
                <span class="time-left">10s</span>
            </div>
        </div>
        <div id="container">
        <?php foreach ($quizArray as $question): ?>
            <div class="container-mid hide">
                <p class="question"><?php echo $question['question']; ?></p>
                <button class="option-div" onclick="checker(this, '<?php echo $question['correct_ans']; ?>')"><?php echo $question['opt1']; ?></button>
                <button class="option-div" onclick="checker(this, '<?php echo $question['correct_ans']; ?>')"><?php echo $question['opt2']; ?></button>
                <button class="option-div" onclick="checker(this, '<?php echo $question['correct_ans']; ?>')"><?php echo $question['opt3']; ?></button>
                <button class="option-div" onclick="checker(this, '<?php echo $question['correct_ans']; ?>')"><?php echo $question['opt4']; ?></button>
            </div>
        <?php endforeach; ?>
        </div>
        <button id="next-button">Next</button>
    </div>

    <div class="score-container hide">
        <div id="user-score">Demo Score</div>
        <button id="restart">Restart</button>
    </div>

    <script>
    var questionCount = 0;
    var scoreCount = 0;
    var count = 10; // Set timer to 10 seconds
    var countdown;
    var shuffledQuizArray;

    // Function to shuffle array
    function shuffleArray(array) {
        var currentIndex = array.length, temporaryValue, randomIndex;
        while (currentIndex !== 0) {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }
        return array;
    }

    function restartPage() {
            window.location.href = "../resources.php";
        }

        document.getElementById("restart").addEventListener("click", function() {
            restartPage();
        });

    function initial() {
        questionCount = 0;
        scoreCount = 0;
        count = 10; 
        clearInterval(countdown);
        timerDisplay();
        shuffledQuizArray = shuffleArray(<?php echo json_encode($quizArray); ?>);
        quizDisplay(questionCount);
    }

   
    function checker(userOption, correctAnswer) {
        var userSolution = userOption.innerText;

        if (userSolution === correctAnswer) {
            userOption.classList.add("correct");
            scoreCount++; // Increase score if answer is correct
            userOption.parentNode.querySelector(".status").innerText = "Correct!";
        } else {
            userOption.classList.add("incorrect");
            var options = userOption.parentNode.querySelectorAll(".option-div");
            options.forEach(function(option) {
                if (option.innerText === correctAnswer) {
                    option.classList.add("correct");
                }
            });
            userOption.parentNode.querySelector(".status").innerText = "Wrong!";
        }

        var options = userOption.parentNode.querySelectorAll(".option-div");
        options.forEach(function(option) {
            option.disabled = true; 
        });

        document.getElementById("next-button").click();
    }

    function quizDisplay(questionCount) {
        var quizCards = document.querySelectorAll(".container-mid");
        quizCards.forEach(function(card) {
            card.classList.add("hide");
        });
        quizCards[questionCount].classList.remove("hide");
    }

    function timerDisplay() {
        count = 10; // Reset timer to 10 seconds
        countdown = setInterval(function() {
            count--;
            document.querySelector(".time-left").innerText = count + "s";
            if (count == 0) {
                clearInterval(countdown);
                document.getElementById("next-button").click();
            }
        }, 1000);
    }

    document.getElementById("next-button").addEventListener("click", function() {
        questionCount++;
        if (questionCount == <?php echo count($quizArray); ?>) {
            var displayContainer = document.getElementById("display-container");
            var scoreContainer = document.querySelector(".score-container");
            displayContainer.classList.add("hide");
            scoreContainer.classList.remove("hide");
            var userScore = document.getElementById("user-score");
            userScore.innerHTML = "Your score is " + scoreCount + " out of <?php echo count($quizArray); ?>";
        
        
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "insert_progress.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send("score=" + scoreCount + "&incorrect_answers=" + (<?php echo count($quizArray); ?> - scoreCount));
} else {
            document.querySelector(".number-of-question").innerText = (questionCount + 1) + " of <?php echo count($quizArray); ?> questions";
            clearInterval(countdown);
            timerDisplay();
            quizDisplay(questionCount);
        }
    });

    document.getElementById("start-button").addEventListener("click", function() {
        var startScreen = document.querySelector(".start-screen");
        var displayContainer = document.getElementById("display-container");
        startScreen.classList.add("hide");
        displayContainer.classList.remove("hide");
        initial();
    });

  
    window.onload = function() {
        var startScreen = document.querySelector(".start-screen");
        var displayContainer = document.getElementById("display-container");
        startScreen.classList.remove("hide");
        displayContainer.classList.add("hide");
    };
</script>


</body>
</html>
