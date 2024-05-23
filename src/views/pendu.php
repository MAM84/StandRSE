<?php

require '../views/header.php';
?>

<div class="d-flex justify-content-center">
    <div id="page">

        <img name="pendu" class="pendu" src="../images/pendu_0.jpg">

        <h1>Jeu de pendu</h1>

        <h2>Entrez une lettre grâce au clavier ci-dessous, si elle est dans la phrase secrette, elle sera affichée mais sinon... la sentence se rapprochera !</h2>

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
         </tr>
         <tr>
          <td onclick="proposer(this);" >K</td>
          <td onclick="proposer(this);" >L</td>
          <td onclick="proposer(this);" >M</td>
          <td onclick="proposer(this);" >N</td>
          <td onclick="proposer(this);" >O</td>
          <td onclick="proposer(this);" >P</td>
          <td onclick="proposer(this);" >Q</td>
          <td onclick="proposer(this);" >R</td>
          <td onclick="proposer(this);" >S</td>
          <td onclick="proposer(this);" >T</td>
         </tr>
         <tr>
          <td onclick="proposer(this);" >U</td>
          <td onclick="proposer(this);" >V</td>
          <td onclick="proposer(this);" >W</td>
          <td onclick="proposer(this);" >X</td>
          <td onclick="proposer(this);" >Y</td>
          <td onclick="proposer(this);" >Z</td>
         </tr>
        </table>
        <br>
        <a class="lien" href="javascript:location.reload();">Nouvelle partie</a>

        <table id="mot">
            <tr>
                <script language="javascript">
                    for(var i=0; i<tailleMot; i++) document.write("<td> <p id=\""+i+"\">"+motSecret.charAt(i)+"</p></td>");
                    // TODO à revoir pour différencier les espaces
                </script>
            </tr>
        </table>

        <script language="javascript">
            for(var i=0; i<tailleMot; i++) tableauMot[i]=document.getElementById(i);
        </script>
    </div>
</div>
<?php require '../views/footer.php'; ?>

