<?php

// Connexion au serveur
$connexion = new PDO('mysql:host=localhost;dbname=insertion_sql;charset=utf8','msb','stagiaire');

//Champs du formulaire
$pseudo = $_POST['pseudo'];
$mot_de_passe =$_POST['mot_de_passe'];
//$id = $_SESSION['id'];

//Requête
$select = $connexion->prepare('SELECT * FROM userdelete WHERE pseudo=? AND mot_de_passe=?');
$select->bindParam(1, $pseudo);
$select->bindParam(2, $mot_de_passe);

//$select->$bindParam(1, $_SESSION['id']);
$select->execute();
$reponse=$select->fetch();
print_r($reponse);
if ($select->rowcount() > 0){
    session_start();
    $_SESSION['id']=$reponse['id'];
    $_SESSION['pseudo']=$reponse['pseudo'];
    $_SESSION['mot_de_passe']=$reponse['mot_de_passe'];
    header('Location:blabla.php');
    //update
}

//echo "Votre pseudo est". $_SESSION['pseudo']." \n Votre mot de passe est ". $_SESSION['mot_de_passe']."";

?>
