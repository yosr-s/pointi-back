<?php 

require_once('../model/CnxAdmin.class.php');
$admin = new CnxAdmin($_POST['login'],$_POST['password']);
$admin->verifier();
//header('location:../index.php');
echo "oui";

?>
