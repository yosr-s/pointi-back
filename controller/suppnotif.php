<?php
require_once('../Model/notif.class.php');

$notif = new notif($_POST['titre'],$_POST['description']);
$notif->supprimer();

header("location:../liste-notif.php?resultat=oui supprim");
exit();
?>