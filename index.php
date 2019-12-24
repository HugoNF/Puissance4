
<?php

$ligne=0;
$pion=0;
$vjoueur1=0;

require './includes/form.php';

require './includes/poscol.php';

require './includes/increment.php';

inc_file();

require './includes/reset.php';

require './includes/compteur.php';

require './includes/victoire.php';

victory();

msg_win();

aff_compteur();


require './includes/result.php';
