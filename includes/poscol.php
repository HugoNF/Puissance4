<?php


function position_colone($colone = NULL ){ //recup valeur utilisateur qui defini la colone

if (isset($_POST['number']))  {

$colone=$_POST['number'];

}
return $colone;

}

