<?php
//var_dump($_POST);

// Connexion au serveur
$connexion = new PDO('mysql:host=localhost;dbname=insertion_sql;charset=utf8','msb','stagiaire');

//Champs du formulaire
$pseudo = $_POST['pseudo'];
$mot_de_passe =$_POST['mot_de_passe'];
//$id = $_SESSION['id'];

//Requête
$select = $connexion->query('SELECT * FROM userdelete');

//Requête
$delete = $connection->query(" DELETE etoile FROM userdelete");
/*Nous traitons les résultats en boucle et c'est lors de l'utilisation de fetch() que nous spécifions le format de
récupération pour le traitement.*/
while( $enregistrement = $select->fetch(PDO::FETCH_OBJ) )
{
// Affichage des champs
echo $enregistrement->Nom ,' ', $enregistrement->Prenom;
}

// Fermer la connexion
$QUERY->close();
?>