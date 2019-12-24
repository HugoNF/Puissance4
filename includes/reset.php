<?php


if (isset($_POST['reset'])) {// copie le contenue des fichier reset au fichier base ;

$fichier="./texte/reset.txt";
$newfichier="./texte/matrice.txt";

$fichierj="./texte/resetjoueur.txt";
$newfichierj="./texte/joueur.txt";

copy($fichierj,$newfichierj);

copy($fichier,$newfichier);


}
