<?php

$file    = fopen( "./texte/joueur.txt", "r" );//fichier compteur tour et permet de choisir à quel joueur appartient le tour;
$content = fgets($file, 4096); // recupere la valeur ;

fclose($file);




