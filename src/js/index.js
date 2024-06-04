"use strict";

// puzzle
function displayImage(imageId) {
    const puzzleImage = document.getElementById('puzzleImage' + imageId)
    puzzleImage.classList.remove('d-none')

    const hiddenImage = document.getElementById('hiddenImage' + imageId)
    hiddenImage.classList.add('d-none')
}

// timer

const departMinutes = 15
let temps = departMinutes * 60

const timerElement = document.getElementById("timer")

function diminuerTemps () {
    let minutes = parseInt(temps / 60, 10)
    let secondes = parseInt(temps % 60, 10)

    minutes = minutes < 10 ? "0" + minutes : minutes
    secondes = secondes < 10 ? "0" + secondes : secondes

    timerElement.innerText = `${minutes}:${secondes}`

    temps = temps <= 0 ? 0 : temps - 1
}

const timerStartElement = document.getElementById("timer-start")
timerStartElement.addEventListener("click", function (e) {
    setInterval(diminuerTemps, 1000)
});

// score
function increaseScore(equipeId) {
    const scoreEquipe = document.getElementById('scoreEquipe' + equipeId)
    scoreEquipe.textContent = parseInt(scoreEquipe.textContent) + 1;
}
