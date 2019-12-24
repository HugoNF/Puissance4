<?php


function msg_win($win1=0,$win2=0){

    

if ($win1>=1 && $win2==0) {
    

    echo "<p class=win1>Victoire du joueur 1 !</p>";
    echo "<p class=win1>Appuyez sur rejouer pour une nouvelle partie !</p>";

    echo "<audio controls><source src=victoire.mp3 type=audio/mp3></audio>";

}

else if($win1==0 && $win2==1){

    echo "<p class=win2>Victoire du joueur 2 !</p>";
    echo "<p class=win2>Appuyez sur rejouer pour une nouvelle partie !</p>";

    echo "<audio controls><source src=victoire.mp3 type=audio/mp3></audio>";

}




}
