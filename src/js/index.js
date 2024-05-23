"use strict";

function displayImage(imageId) {
    const puzzleImage = document.getElementById('puzzleImage' + imageId)
    puzzleImage.classList.remove('d-none')

    const hiddenImage = document.getElementById('hiddenImage' + imageId)
    hiddenImage.classList.add('d-none')
}