<?php
class Service{
private $titre;
private $description;


                

function __construct($titre,$description){
$this->titre = $titre;
$this->description = $description;



}

public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec ("INSERT INTO `Service`(`titre`,`description`) VALUES ('$this->titre','$this->description')");
		
		echo'oui';
               
    
}


    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE `service` SET `titre`='$this->titre',`description`='$this->description'WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM service WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>