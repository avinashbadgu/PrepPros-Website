//References
let timeLeft = document.querySelector(".time-left");
let quizContainer = document.getElementById("container");
let nextBtn = document.getElementById("next-button");
let countOfQuestion = document.querySelector(".number-of-question");
let displayContainer = document.getElementById("display-container");
let scoreContainer = document.querySelector(".score-container");
let restart = document.getElementById("restart");
let userScore = document.getElementById("user-score");
let startScreen = document.querySelector(".start-screen");
let startButton = document.getElementById("start-button");
let questionCount;
let scoreCount = 0;
let count = 11;
let countdown;

//Questions and Options array

const quizArray = [
    {
        id: "0",
        question: "Choose the synonym for 'Ubiquitous.'",
        options: ["Rare", "Pervasive", "Sparse", "Limited"],
        correct: "Pervasive",
    },
    {
        id: "1",
        question: "Which sentence is grammatically correct?",
        options: [
            "I don't got any money.",
            "I didn't got any money.",
            "I don't get any money.",
            "I didn't get any money.",
        ],
        correct: "I didn't get any money.",
    },
    {
        id: "2",
        question: "Identify the antonym for 'Benevolent.'",
        options: ["Malevolent", "Compassionate", "Altruistic", "Generous"],
        correct: "Malevolent",
    },
    {
        id: "3",
        question: "Choose the correct spelling.",
        options: ["Exaggerate", "Exagerate", "Exagerrate", "Exaggeratte"],
        correct: "Exaggerate",
    },
    {
        id: "4",
        question: "Which sentence is a compound sentence?",
        options: [
            "The cat is sleeping.",
            "She ran fast.",
            "The sun was shining, and the birds were singing.",
            "He ate quickly.",
        ],
        correct: "The sun was shining, and the birds were singing.",
    },
    {
        id: "5",
        question: "What is the synonym for 'Serene'?",
        options: ["Chaotic", "Calm", "Furious", "Anxious"],
        correct: "Calm",
    },
    {
        id: "6",
        question: "Identify the correctly punctuated sentence.",
        options: [
            "I love pizza, however, I prefer pasta.",
            "I love pizza; however, I prefer pasta.",
            "I love pizza, however I prefer pasta.",
            "I love pizza however, I prefer pasta.",
        ],
        correct: "I love pizza; however, I prefer pasta.",
    },
    {
        id: "7",
        question: "Choose the correct usage of 'their' in a sentence.",
        options: [
            "They're going to the park.",
            "Their going to the park.",
            "There going to the park.",
            "Theyre going to the park.",
        ],
        correct: "They're going to the park.",
    },
    {
        id: "8",
        question: "What is the meaning of the word 'Mellifluous'?",
        options: ["Harsh", "Sweet-sounding", "Bitter", "Fragrant"],
        correct: "Sweet-sounding",
    },
    {
        id: "9",
        question: "Which sentence is an example of hyperbole?",
        options: [
            "I am as tall as a tree.",
            "The water is freezing.",
            "The sun is shining brightly.",
            "I have a ton of homework.",
        ],
        correct: "I have a ton of homework.",
    },
    {
        id: "10",
        question: "If all dogs bark and Fido is a dog, what can be concluded?",
        options: ["Fido barks", "Fido meows", "Fido is silent", "All animals bark"],
        correct: "Fido barks",
    },
    {
        id: "11",
        question: "All humans are mortal. Socrates is human. What can be concluded?",
        options: [
            "Socrates is mortal",
            "Socrates is immortal",
            "All humans are immortal",
            "All mortals are human",
        ],
        correct: "Socrates is mortal",
    },
    {
        id: "12",
        question: "If it rains, then the streets are wet. The streets are wet. What can be concluded?",
        options: ["It rains", "It does not rain", "The sprinklers are on", "The streets are dry"],
        correct: "It rains",
    },
    {
        id: "13",
        question: "If A implies B, and B implies C, what can be inferred?",
        options: ["A implies C", "C implies A", "A is independent of B and C", "A contradicts C"],
        correct: "A implies C",
    },
    {
        id: "14",
        question: "All students in the physics class are required to take a lab. If Jane is in the physics class, what can be inferred?",
        options: [
            "Jane is required to take a lab",
            "Jane is not required to take a lab",
            "Jane is a physics teacher",
            "Jane is a chemistry student",
        ],
        correct: "Jane is required to take a lab",
    },
    {
        id: "15",
        question: "If no birds can fly and Tweety is a bird, what can be concluded?",
        options: ["Tweety can fly", "Tweety cannot fly", "Tweety is a fish", "Some birds can fly"],
        correct: "Tweety cannot fly",
    },
    {
        id: "16",
        question: "If it is not raining, then the picnic will be held. The picnic is not held. What can be inferred?",
        options: ["It is raining", "The picnic is indoors", "The weather is clear", "The picnic is canceled for another reason"],
        correct: "It is raining",
    },
    {
        id: "17",
        question: "If John is taller than Mike, and Mike is taller than Bob, who is the shortest?",
        options: ["John", "Mike", "Bob", "Not enough information"],
        correct: "Bob",
    },
    {
        id: "18",
        question: "If all rectangles have four sides and a square is a rectangle, what can be concluded?",
        options: ["All rectangles are squares", "All squares have four sides", "Some rectangles are not squares", "Squares do not have four sides"],
        correct: "All squares have four sides",
    },
    {
        id: "19",
        question: "If a car has a flat tire, then it cannot be driven. If the car is driven, what can be concluded?",
        options: ["The car has a flat tire", "The car does not have a flat tire", "The car has a spare tire", "The car is an electric car"],
        correct: "The car has a flat tire",
    },
];


//Restart Quiz
restart.addEventListener("click", () => {
    initial();
    displayContainer.classList.remove("hide");
    scoreContainer.classList.add("hide");
});

//Next Button
nextBtn.addEventListener(
    "click",
    (displayNext = () => {
        //increment questionCount
        questionCount += 1;
        //if last question
        if (questionCount == quizArray.length) {
            //hide question container and display score
            displayContainer.classList.add("hide");
            scoreContainer.classList.remove("hide");
            //user score
            userScore.innerHTML =
                "Your score is " + scoreCount + " out of " + questionCount;
        } else {
            //display questionCount
            countOfQuestion.innerHTML =
                questionCount + 1 + " of " + quizArray.length + " Question";
            //display quiz
            quizDisplay(questionCount);
            count = 11;
            clearInterval(countdown);
            timerDisplay();
        }
    })
);

//Timer
const timerDisplay = () => {
    countdown = setInterval(() => {
        count--;
        timeLeft.innerHTML = `${count}s`;
        if (count == 0) {
            clearInterval(countdown);
            displayNext();
        }
    }, 1000);
};

//Display quiz
const quizDisplay = (questionCount) => {
    let quizCards = document.querySelectorAll(".container-mid");
    //Hide other cards
    quizCards.forEach((card) => {
        card.classList.add("hide");
    });
    //display current question card
    quizCards[questionCount].classList.remove("hide");
};

//Quiz Creation
function quizCreator() {
    //randomly sort questions
    quizArray.sort(() => Math.random() - 0.5);
    //generate quiz
    for (let i of quizArray) {
        //randomly sort options
        i.options.sort(() => Math.random() - 0.5);
        //quiz card creation
        let div = document.createElement("div");
        div.classList.add("container-mid", "hide");
        //question number
        countOfQuestion.innerHTML = 1 + " of " + quizArray.length + " Question";
        //question
        let question_DIV = document.createElement("p");
        question_DIV.classList.add("question");
        question_DIV.innerHTML = i.question;
        div.appendChild(question_DIV);
        //options
        div.innerHTML += `
    <button class="option-div" onclick="checker(this)">${i.options[0]}</button>
     <button class="option-div" onclick="checker(this)">${i.options[1]}</button>
      <button class="option-div" onclick="checker(this)">${i.options[2]}</button>
       <button class="option-div" onclick="checker(this)">${i.options[3]}</button>
    `;
        quizContainer.appendChild(div);
    }
}

//Checker Function to check if option is correct or not
function checker(userOption) {
    let userSolution = userOption.innerText;
    let question =
        document.getElementsByClassName("container-mid")[questionCount];
    let options = question.querySelectorAll(".option-div");

    //if user clicked answer == correct option stored in object
    if (userSolution === quizArray[questionCount].correct) {
        userOption.classList.add("correct");
        scoreCount++;
    } else {
        userOption.classList.add("incorrect");
        //For marking the correct option
        options.forEach((element) => {
            if (element.innerText == quizArray[questionCount].correct) {
                element.classList.add("correct");
            }
        });
    }

    //clear interval(stop timer)
    clearInterval(countdown);
    //disable all options
    options.forEach((element) => {
        element.disabled = true;
    });
}

//initial setup
function initial() {
    quizContainer.innerHTML = "";
    questionCount = 0;
    scoreCount = 0;
    count = 11;
    clearInterval(countdown);
    timerDisplay();
    quizCreator();
    quizDisplay(questionCount);
}

//when user click on start button
startButton.addEventListener("click", () => {
    startScreen.classList.add("hide");
    displayContainer.classList.remove("hide");
    initial();
});

//hide quiz and display start screen
window.onload = () => {
    startScreen.classList.remove("hide");
    displayContainer.classList.add("hide");
};