<?php

require 'views/header.php';
?>

<div class="d-flex flex-column align-items-center display-3 h-100">
    <button class="button mb-5 p-5 bg-secondary border rounded-pill" type="button">
        <a href="/views/pendu.php" class="text-primary text-decoration-none">Jeu du pendu</a>
    </button>
    <button class="button mb-5 p-5 bg-secondary border rounded-pill" type="button">
        <a href="/views/puzzle.php" class="text-primary text-decoration-none">Puzzle à découvrir</a>
    </button>
</div>

<?php require 'views/footer.php'; ?>