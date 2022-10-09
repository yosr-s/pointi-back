<?php
require_once('../Model/service.class.php');

$service = new Service($_POST['titre'],$_POST['description']);
$service->ajouter();

header("location:../liste-service3.php?resultat=oui");
exit();
?>