<?php
class Salarie{
private $nom;
private $prenom;
private $cin;
private $email;
private $password;
private $service;
private $salaire;
private $image;
private $commentaire;






                

function __construct($nom,$prenom,$cin,$email,$password, $service, $salaire, $image,$commentaire){
$this->nom = $nom;
$this->prenom = $prenom;
$this->cin = $cin;
$this->email = $email;
$this->password = $password;
$this->service = $service;
$this->salaire = $salaire;
$this->image = $image;
$this->commentaire = $commentaire;








}


public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec ("INSERT INTO `salarie`(`nom`,`prenom`, `cin`, `email`, `password`, `service`,`salaire`,`image`,`commentaire` ) VALUES ('$this->nom','$this->prenom','$this->cin','$this->email','$this->password','$this->service','$this->salaire','$this->image','$this->commentaire')");
		
		echo'oui';
               
    
}


    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE `salarie` SET `nom`='$this->nom',`prenom`='$this->prenom',`cin`='$this->cin',`email`='$this->email',`password`='$this->password', `service`='$this->service', `salaire`='$this->salaire', `image`='$this->image' , `commentaire`='$this->commentaire' WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM salarie WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>