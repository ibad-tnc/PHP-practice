let boxes = document.querySelectorAll(".box");
let resetBtn = document.querySelector("#reset-btn");
let newGameBtn = document.querySelector("#new-btn");
let msgContainer = document.querySelector(".msg-container");
let msg = document.querySelector("#msg");

let turnO = true; // Player X turn, Player O turn
let count = 0; // Count for checking draw game

// All possible Winning patterns for Tic Tac Toe
let winPatterns = [
    [0,1,2],
    [0,3,6],
    [0,4,8],
    [2,5,8], 
    [2,4,6],
    [1,4,7],
    [3,4,5],
    [6,7,8]
];

boxes.forEach((box) => {
    box.addEventListener("click", () => {
        if (turnO) {
            box.innerText = "O";
            turnO = false;
        } else {
            box.innerText = "X";
            turnO = true;
        }
        box.disabled = true;
        count++;

        let isWinner = checkWinner();
        if (count === 9 && !isWinner) {
            gameDraw();
        }
    });
});

const gameDraw = () => {
    msg.innerText = "Game is draw!";
    msg.classList.add("draw-text"); // add animation class
    msgContainer.classList.remove("hide");
    disableBoxes();
};

const checkWinner = () => {
    for (let pattern of winPatterns) {
        let pos1Val = boxes[pattern[0]].innerText;
        let pos2Val = boxes[pattern[1]].innerText;
        let pos3Val = boxes[pattern[2]].innerText;

        if (pos1Val != "" && pos2Val != "" && pos3Val != "") {
            if (pos1Val === pos2Val && pos2Val === pos3Val) {
                showWinner(pos1Val, pattern);
                return true;
            }
        }
    }
    return false;
};

const showWinner = (winner, pattern) => {
    msg.innerText = `Player ${winner} wins!`;
    msgContainer.classList.remove("hide");
        // Apply animation to winning boxes
    pattern.forEach(index => {
        boxes[index].classList.add("winner-box");
    });
    disableBoxes();
};

const disableBoxes = () => {
    boxes.forEach((box) => {
        box.disabled = true;
    });
};

const enableBoxes = () => {
    boxes.forEach((box) => {
        box.innerText = "";
        box.disabled = false;
    });
};

const resetGame = () => {
    turnO = true;
    count = 0;
    enableBoxes();
    msgContainer.classList.add("hide");
        // Remove winner animation
    boxes.forEach(box => {
        box.classList.remove("winner-box");
    });
    msg.classList.remove("draw-text");
};

newGameBtn.addEventListener("click", resetGame);
resetBtn.addEventListener("click", resetGame);