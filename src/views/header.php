<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Stand RSE N°6</title>
        <link rel="shortcut icon" href="/images/favicon-16x16.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/stylePendu.css">

        <!--pour le jeu du pendu-->
        <script language="JavaScript">
            <!--
            var motSecret;

            var now=new Date();			// Date d'aujourd'hui
            var tableauMot=new Array();	// Le tableau qui contient les lettres du mot à trouver
            var mots=new Array();		// Le tableau qui contient tous les mots possibles

            var tailleMot;				// Le nombre de lettres du mot à trouver
            var coupsManques=0;			// Le nombre de lettres fausses essayées
            var lettresTrouvees=0;		// Le nombre de lettres trouvées
            var fini=false;				// true si le jeu est terminé

            mots[0]="PROTEGER LES PERSONNES AGEES";
            /*mots[1]="ANABELLE";
            mots[2]="POMPIER";
            mots[3]="OBELISQUE";
            mots[4]="PLACARD";
            mots[5]="RADIATEUR";
            mots[6]="DEODORANT";
            mots[7]="CAMION";
            mots[8]="HORLOGE";
            mots[9]="MARGUERITE";
            mots[10]="ELEPHANT";
            mots[11]="IGLOO";
            mots[12]="NAVIRE";*/

            // On prend un mot au hasard en fonction de la seconde en cours
            motSecret=mots[now.getSeconds() % mots.length];
            tailleMot=motSecret.length;

            // Permet de changer la couleur des touches du clavier
            function changeCouleur(element,couleur){
                element.style.backgroundColor=couleur;
            }

            // G�re tous les traitements à faire lorsqu'on appuie sur une touche
            function proposer(element){

                // Si la couleur de fond est lightgreen, c'est qu'on a déjà essayé - on quitte la fonction
                if(element.style.backgroundColor=="lightGreen" ||fini) return;

                // On récupère la lettre du clavier et on met la touche en lightgreen (pour signaler qu'elle est cliquée)
                var lettre=element.innerHTML;
                changeCouleur(element,"lightGreen");

                // On met la variable trouve à false;
                var trouve=false;

                // On parcours chaque lettre du mot, on cherche si on trouve la lettre séléctionnée au clavier
                for(var i=0; i<tailleMot; i++) {

                    // Si c'est le cas :
                    if(tableauMot[i].innerHTML==lettre) {
                        tableauMot[i].style.visibility='visible';	// On affiche la lettre
                        trouve=true;
                        lettresTrouvees++;
                    }

                }

                // Si la lettre n'est pas présente, trouvé vaut toujours false :
                if(!trouve){
                    coupsManques++;
                    document.images['pendu'].src="../images/pendu_"+coupsManques+".jpg"; // On change l'image du pendu

                    // Si on a rate 9 fois :
                    if(coupsManques==9){
                        alert("Vous avez perdu !");
                        for(var i=0; i<tailleMot; i++) tableauMot[i].style.visibility='visible';
                        fini=true;
                        // on affiche le mot, on fini le jeu
                    }
                }
                if(lettresTrouvees==tailleMot){
                    alert("Bravo ! Vous avez découvert le mot secret !");
                    fini=true;
                }
            }
            -->
        </script>
    </head>

    <body>
        <nav class="navbar bg-primary mb-5">
            <div class="d-flex align-items-center w-100">
                <div class="col-md-5 d-flex justify-content-start align-items-center ms-5">
                    <a href="../index.php">
                        <img src="/images/logo-apivia-courtage-blanc.svg" alt="" class="h-25 w-25">
                    </a>
                </div>
                <div class="col-md-7">
                    <p class="d-flex justify-content-start align-items-center fw-bold fs-1">Stand RSE N°6</p>
                </div>
            </div>
        </nav>
        <div class="main px-5">

