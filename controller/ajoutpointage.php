<?php
require_once('../Model/pointage.class.php');

$pointage = new pointage($_POST['idd'],$_POST['date'],$_POST['arrivee'],$_POST['sortie'],$_POST['arrive'],$_POST['sort'],$_POST['nom'],$_POST['prenom']);
$pointage->ajouter();

header("location:../liste-pointage.php?resultat=oui");
exit();
?>