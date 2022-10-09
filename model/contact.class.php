<?php
class Contact{
private $nom;
private $email;
private $sujet;
private $message;

                

function __construct($nom,$email,$sujet,$message){
$this->nom = $nom;
$this->email = $email;
$this->sujet = $sujet;
$this->message = $message;



}

public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec ("INSERT INTO `contact`(`nom`,`email`, `sujet`, `message`) VALUES ('$this->nom','$this->email','$this->sujet','$this->message')");
		
		echo'oui';
               
    
}


    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE `contact` SET `nom`='$this->nom',`email`='$this->email',`sujet`='$this->sujet',`message`='$this->message' WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM contact WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>