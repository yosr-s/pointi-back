<?php
class pointage{
private $idd;
private $date;
private $arrivee;
private $sortie;
private $arrive;
private $sort;
private $nom;
private $prenom;







                

function __construct($idd,$date,$arrivee,$sortie,$arrive,$sort,$nom,$prenom){
$this->idd = $idd;
$this->date = $date;
$this->arrivee = $arrivee;
$this->sortie = $sortie;
$this->arrive = $arrive;
$this->sort = $sort;
$this->nom = $nom;
$this->prenom = $prenom;











}

public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec ("INSERT INTO `pointage`(`idd`,`date`,`arrivee`,`sortie`,`arrive`,`sort`,`nom`,`prenom`) VALUES ('11','2022-03-05','08:00:00','12:00:00','13:00:00','18:00:00','ayoubbb','fdhila')");
		
		echo'oui';
               
    
}


  
			


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>