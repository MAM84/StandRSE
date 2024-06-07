"use strict";

// puzzle
function displayImage(imageId) {
    const puzzleImage = document.getElementById('puzzleImage' + imageId)
    puzzleImage.classList.remove('d-none')

    const hiddenImage = document.getElementById('hiddenImage' + imageId)
    hiddenImage.classList.add('d-none')
}

// timer global

const departMinutesGlobal = 15
let tempsGlobal = departMinutesGlobal * 60

const timerElementGlobal = document.getElementById("timer-global")

function diminuerTempsGlobal () {
    let minutes = parseInt(tempsGlobal / 60, 10)
    let secondes = parseInt(tempsGlobal % 60, 10)

    minutes = minutes < 10 ? "0" + minutes : minutes
    secondes = secondes < 10 ? "0" + secondes : secondes

    timerElementGlobal.innerText = `${minutes}:${secondes}`

    tempsGlobal = tempsGlobal <= 0 ? 0 : tempsGlobal - 1
}

const timerGlobalStartElement = document.getElementById("timer-global-start")
timerGlobalStartElement.addEventListener("click", function (e) {
    timerGlobalStartElement.disabled = true;
    setInterval(diminuerTempsGlobal, 1000);
});

// timer game

const departMinutesGame = 8
let tempsGame = departMinutesGame * 60

const timerElementGame = document.getElementById("timer-game")

function diminuerTempsGame () {
    let minutes = parseInt(tempsGame / 60, 10)
    let secondes = parseInt(tempsGame % 60, 10)

    minutes = minutes < 10 ? "0" + minutes : minutes
    secondes = secondes < 10 ? "0" + secondes : secondes

    timerElementGame.innerText = `${minutes}:${secondes}`

    tempsGame = tempsGame <= 0 ? 0 : tempsGame - 1
}

const timerGameStartElement = document.getElementById("timer-game-start")
timerGameStartElement.addEventListener("click", function (e) {
    timerGameStartElement.disabled = true;
    setInterval(diminuerTempsGame, 1000);
});

// score
function increaseScore(equipeId) {
    const scoreEquipe = document.getElementById('scoreEquipe' + equipeId)
    scoreEquipe.textContent = parseInt(scoreEquipe.textContent) + 1;
}

function decreaseScore(equipeId) {
    const scoreEquipe = document.getElementById('scoreEquipe' + equipeId)
    scoreEquipe.textContent = (parseInt(scoreEquipe.textContent) - 1) > 0 ? (parseInt(scoreEquipe.textContent) - 1) : 0;
}
