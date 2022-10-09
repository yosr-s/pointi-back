<?php
require_once('../model/Admin.class.php');

$admin = new Admin($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['password'],$_POST['email'],$_POST['type']);
$admin->ajouter();

header("location:../liste-admin3.php?resultat=oui");
exit();
?>