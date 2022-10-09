<?php
class emploi{
private $dps;
private $fps;
private $dds;
private $fds;
private $nbh;
private $prix;
private $prixhsup;






                

function __construct($dps,$fps,$dds,$fds,$nbh,$prix,$prixhsup){
$this->dps = $dps;
$this->fps = $fps;
$this->dds = $dds;
$this->fds = $fds;
$this->nbh = $nbh;
$this->prix = $prix;
$this->prixhsup = $prixhsup;










}

public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec ("INSERT INTO `emploi`(`dps`,`fps`,`dds`,`fds`,`nbh`,`prix`,`prixhsup`) VALUES ('$this->dps','$this->fps','$this->dds','$this->fds','$this->nbh','$this->prix','$this->prixhsup')");
		
		echo'oui';
               
    
}


    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE `emploi` SET `dps`='$this->dps',`fps`='$this->fps',`dds`='$this->dds',`fds`='$this->fds',`nbh`='$this->nbh',`prix`='$this->prix',`prixhsup`='$this->prixhsup' WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM emploi WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>