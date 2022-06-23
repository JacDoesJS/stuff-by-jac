//game set up
let userScore = 0;
let computerScore = 0;
let computerGs
let user
let violin


//there's an event function in this next bit which isn't actually doing anything!!

//check which button the user clicks
function jacr() {
    const top = document.getElementById("butR");
    top.style.backgroundColor = "blue";
    document.getElementById("butR").innerHTML = ("Rock");
    document.getElementById("butR").addEventListener("click", function(event) {
    user = "rock";
    document.getElementById("demo").innerHTML = ("User - rock");
    console.log("user - rock");   
    computerGuess();
})
}

function jacp() {
    const middle = document.getElementById("butP");
    middle.style.backgroundColor = "blue";
    document.getElementById("butP").innerHTML = ("Paper");
    document.getElementById("butP").addEventListener("click", function(event) {
    user = "paper";
    document.getElementById("demo").innerHTML = ("User - paper");
    console.log("user - paper");   
    computerGuess();
})
}

function jacs() {
    const bottom = document.getElementById("butS");
    bottom.style.backgroundColor = "blue";
    document.getElementById("butS").innerHTML = ("Scissors");
    document.getElementById("butS").addEventListener("click", function(event) {
    user = "scissors";
    document.getElementById("demo").innerHTML = ("User - scissors");
    console.log("user - scissors");  
    computerGuess(); 
})
}

//the computer chooses its weapon
function computerGuess() {
    let guess = Math.random()*3;
    let computerGs = Math.floor(guess);   
    console.log(computerGs);
      
    if (computerGs === 0) {
        document.getElementById("computer").innerHTML = ("Computer - rock");
        console.log("computer chooses rock");
        pcWeapon = "rock it";
    } else if (computerGs === 1) {
        document.getElementById("computer").innerHTML = ("Computer - paper");
        console.log("computer chooses paper");
        pcWeapon = "paper it";
    } else if (computerGs === 2) {
        document.getElementById("computer").innerHTML = ("Computer - scissors");
        console.log("computer chooses scissors");
        pcWeapon = "scissors it";
    };
    logic();
};

//the score
function scoring() {

    document.getElementById("userScore").innerHTML = userScore;
    document.getElementById("computerScore").innerHTML = (computerScore);  

    console.log(`You scored ${userScore} points. The computer scored ${computerScore} points.`)
};

function logic() {
    console.log(pcWeapon);

    if (pcWeapon === "rock it" && user === "rock") {
        console.log("rock-rock draw");
        document.getElementById("result").innerHTML = ("It's a draw.");
    } else if (pcWeapon === "paper it" && user === "rock") {
        console.log("paper-rock, pc win");
        document.getElementById("result").innerHTML = ("You lose: paper wraps rock.");
        computerScore ++;
    } else if (pcWeapon === "scissors it" && user === "rock") {
        console.log("rock-scissors, user win");
        document.getElementById("result").innerHTML = ("YOU WIN: rock blunts scissors.");
        userScore ++;
    } else {
        console.log(userScore, computerScore);

    }

    if (pcWeapon === "rock it" && user === "paper") {
        console.log("paper-rock user win");
        document.getElementById("result").innerHTML = ("YOU WIN: paper wraps rock.");
        userScore ++;
    } else if (pcWeapon === "paper it" && user === "paper") {
        console.log("paper-paper draw");
        document.getElementById("result").innerHTML = ("It's a draw.");
    } else if (pcWeapon === "scissors it" && user === "paper") {
        console.log("paper-scissors pc win");
        document.getElementById("result").innerHTML = ("You lose: scissors cut paper.");
        computerScore ++;
    } else {
        console.log(userScore, computerScore);

    }

    if (pcWeapon === "rock it" && user === "scissors") {
        console.log("scissors-rock pc win");
        document.getElementById("result").innerHTML = ("You lose: rock blunts scissors.");
        computerScore ++;
    } else if (pcWeapon === "paper it" && user === "scissors") {
        console.log("scissors-paper user win");
        document.getElementById("result").innerHTML = ("YOU WIN: scissors cut paper.");
        userScore ++;
    } else if (pcWeapon === "scissors it" && user === "scissors") {
        console.log("scissors-scissors draw");
        document.getElementById("result").innerHTML = ("It's a draw.");
    } else {
        console.log(userScore, computerScore);
    };

    scoring();
}

   /* if (pcWeapon === "rock it" && user === "rock") {
        console.log("draw");
        document.getElementById("result").innerHTML = ("That's rock against rock. It's a draw.");
    } else if (pcWeapon === "scissor it" && user === "rock") {
        console.log("user win");
    } else {
        console.log("oops");
    };
   
    again();
}; */


//the actual game part, first it resets the rock, paper, scissors buttons
function game() {
    
    jacr();
    jacp();
    jacs();
};



function restart() {
    document.getElementById("butS").addEventListener("click", function(event) {
    //game();
    console.log("restart");  
})
}


game() 
