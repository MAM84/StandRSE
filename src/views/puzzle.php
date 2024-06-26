<?php

require '../views/header.php';
?>

<div class="d-flex flex-column align-items-center mb-5">
    <div class="d-flex">
        <img id="puzzleImage1" src="../images/puzzle-image-1.jpg" alt="" class="d-none">
        <div id="hiddenImage1" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(1)">1</div>
        <img id="puzzleImage2" src="../images/puzzle-image-2.jpg" alt="" class="d-none">
        <div id="hiddenImage2" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(2)">2</div>
        <img id="puzzleImage3" src="../images/puzzle-image-3.jpg" alt="" class="d-none">
        <div id="hiddenImage3" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(3)">3</div>
    </div>
    <div class="d-flex">
        <img id="puzzleImage4" src="../images/puzzle-image-4.jpg" alt="" class="d-none">
        <div id="hiddenImage4" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(4)">4</div>
        <img id="puzzleImage5" src="../images/puzzle-image-5.jpg" alt="" class="d-none">
        <div id="hiddenImage5" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(5)">5</div>
        <img id="puzzleImage6" src="../images/puzzle-image-6.jpg" alt="" class="d-none">
        <div id="hiddenImage6" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(6)">6</div>
    </div>
    <div class="d-flex">
        <img id="puzzleImage7" src="../images/puzzle-image-7.jpg" alt="" class="d-none">
        <div id="hiddenImage7" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(7)">7</div>
        <img id="puzzleImage8" src="../images/puzzle-image-8.jpg" alt="" class="d-none">
        <div id="hiddenImage8" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(8)">8</div>
        <img id="puzzleImage9" src="../images/puzzle-image-9.jpg" alt="" class="d-none">
        <div id="hiddenImage9" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(9)">9</div>
    </div>
    <!--<img src="../images/puzzle-image.jpg" alt="">-->
</div>

<a class="lien" href="javascript:location.reload();">Nouvelle partie</a>

<?php require '../views/footer.php'; ?>
