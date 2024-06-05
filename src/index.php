<?php

require 'views/header.php';
?>

<!-- timer et score -->
<div class="d-flex justify content">
    <!-- timer -->
    <div class="d-flex col-md-3 align-items-start">
        <div class="timer d-flex flex-column align-items-center justify-content-end col-md-6">
            <button id="timer-global-start" class="button p-3 bg-primary border rounded-pill text-secondary fs-3 fw-bold d-flex flex-column">Start <small>(global)</small></button>
            <div id="timer-global" class="fw-bold fs-1">15:00</div>
        </div>
        <div class="timer d-flex flex-column align-items-center justify-content-end col-md-6">
            <button id="timer-game-start" class="button p-3 bg-primary border rounded-pill text-secondary fs-3 fw-bold d-flex flex-column">Start <small>(jeu)</small></button>
            <div id="timer-game" class="fw-bold fs-1">08:00</div>
        </div>
    </div>
    <!-- score -->
    <div class="score col-md-9">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Equipe 1</th>
                    <th scope="col">Equipe 2</th>
                    <th scope="col">Equipe 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row d-flex">Score</th>
                    <td>
                        <button class="button px-3 bg-primary border rounded-pill text-secondary fs-4 fw-bold me-3" type="button" onclick="decreaseScore(1)">-</button>
                        <button class="button px-3 bg-primary border rounded-pill text-secondary fs-4 fw-bold me-3" type="button" onclick="increaseScore(1)">+</button>
                        <span id="scoreEquipe1" class="fw-bold fs-4">0</span>
                    </td>
                    <td>
                        <button class="button px-3 bg-primary border rounded-pill text-secondary fs-4 fw-bold me-3" type="button" onclick="decreaseScore(2)">-</button>
                        <button class="button px-3 bg-primary border rounded-pill text-secondary fs-4 fw-bold me-3" onclick="increaseScore(2)">+</button>
                        <span id="scoreEquipe2" class="fw-bold fs-4">0</span>
                    </td>
                    <td>
                        <button class="button px-3 bg-primary border rounded-pill text-secondary fs-4 fw-bold me-3" type="button" onclick="decreaseScore(3)">-</button>
                        <button class="button px-3 bg-primary border rounded-pill text-secondary fs-4 fw-bold me-3" onclick="increaseScore(3)">+</button>
                        <span id="scoreEquipe3" class="fw-bold fs-4">0</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- image et pendu -->
<div class="d-flex mt-2">
    <!-- image -->
    <div class="d-flex flex-column align-items-center mb-1">
        <div class="d-flex">
            <img id="puzzleImage1" src="images/puzzle-image-1.jpg" alt="" class="d-none">
            <div id="hiddenImage1" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(1)">1</div>
            <img id="puzzleImage2" src="images/puzzle-image-2.jpg" alt="" class="d-none">
            <div id="hiddenImage2" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(2)">2</div>
            <img id="puzzleImage3" src="images/puzzle-image-3.jpg" alt="" class="d-none">
            <div id="hiddenImage3" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(3)">3</div>
        </div>
        <div class="d-flex">
            <img id="puzzleImage4" src="images/puzzle-image-4.jpg" alt="" class="d-none">
            <div id="hiddenImage4" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(4)">4</div>
            <img id="puzzleImage5" src="images/puzzle-image-5.jpg" alt="" class="d-none">
            <div id="hiddenImage5" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(5)">5</div>
            <img id="puzzleImage6" src="images/puzzle-image-6.jpg" alt="" class="d-none">
            <div id="hiddenImage6" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(6)">6</div>
        </div>
        <div class="d-flex">
            <img id="puzzleImage7" src="images/puzzle-image-7.jpg" alt="" class="d-none">
            <div id="hiddenImage7" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(7)">7</div>
            <img id="puzzleImage8" src="images/puzzle-image-8.jpg" alt="" class="d-none">
            <div id="hiddenImage8" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(8)">8</div>
            <img id="puzzleImage9" src="images/puzzle-image-9.jpg" alt="" class="d-none">
            <div id="hiddenImage9" class="hidden-image bg-secondary text-primary d-flex justify-content-center align-items-center fw-bold fs-1 border border-2 border-primary" onclick="displayImage(9)">9</div>
        </div>
    </div>
    <!-- pendu -->
    <div class="d-flex justify-content-center">
        <div id="page">

            <img name="pendu" class="pendu" src="images/pendu_0.jpg">

            <table id="clavier">
                <tr>
                    <td onclick="proposer(this);" >A</td>
                    <td onclick="proposer(this);" >B</td>
                    <td onclick="proposer(this);" >C</td>
                    <td onclick="proposer(this);" >D</td>
                    <td onclick="proposer(this);" >E</td>
                    <td onclick="proposer(this);" >F</td>
                    <td onclick="proposer(this);" >G</td>
                    <td onclick="proposer(this);" >H</td>
                    <td onclick="proposer(this);" >I</td>
                    <td onclick="proposer(this);" >J</td>
                    <td onclick="proposer(this);" >K</td>
                    <td onclick="proposer(this);" >L</td>
                    <td onclick="proposer(this);" >M</td>
                </tr>
                <tr>
                    <td onclick="proposer(this);" >N</td>
                    <td onclick="proposer(this);" >O</td>
                    <td onclick="proposer(this);" >P</td>
                    <td onclick="proposer(this);" >Q</td>
                    <td onclick="proposer(this);" >R</td>
                    <td onclick="proposer(this);" >S</td>
                    <td onclick="proposer(this);" >T</td>
                    <td onclick="proposer(this);" >U</td>
                    <td onclick="proposer(this);" >V</td>
                    <td onclick="proposer(this);" >W</td>
                    <td onclick="proposer(this);" >X</td>
                    <td onclick="proposer(this);" >Y</td>
                    <td onclick="proposer(this);" >Z</td>
                </tr>
            </table>
            <br>

            <table id="mot">
                <tr>
                    <script language="javascript">
                        for(var i=0; i<tailleMot; i++) document.write("<td class=\"white"+i+"\"> <p id=\""+i+"\">"+motSecret.charAt(i)+"</p></td>");

                    </script>
                </tr>
            </table>

            <script language="javascript">
                for(var i=0; i<tailleMot; i++) tableauMot[i]=document.getElementById(i);
            </script>
        </div>
    </div>
</div>

<!-- reset -->
<div class="">
    <a class="lien bg-black" href="javascript:location.reload();">Reset</a>
</div>

<?php require 'views/footer.php'; ?>

