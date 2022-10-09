<?php
class Admin{
private $nom;
private $prenom;
private $login;
private $password;
private $email;
private $type;

                

function __construct($nom,$prenom,$login,$password, $email, $type){
$this->nom = $nom;
$this->prenom = $prenom;
$this->login = $login;
$this->password = $password;
$this->email = $email;
$this->type = $type;



}

public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec ("INSERT INTO `administrateur`(`nom`,`prenom`, `login`, `password`, `email`, `type`) VALUES ('$this->nom','$this->prenom','$this->login','$this->password','$this->email','$this->type')");
		
		echo'oui';
               
    
}


    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE `administrateur` SET `nom`='$this->nom',`prenom`='$this->prenom',`login`='$this->login',`password`='$this->password',`email`='$this->email',`type`='$this->type' WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM administrateur WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>
