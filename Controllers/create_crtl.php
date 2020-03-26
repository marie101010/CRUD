<?php

//var_dump ($_POST);

//connexion au serveur

try {
$connexion = new PDO('mysql:host=localhost;dbname=insertion_sql;charset=utf8','msb','stagiaire');
echo 'Bienvenue chez les super-vilains! ';
} 
catch (Exception $e) {
die('Erreur :'.$e->getMessage());
echo "Connexion non-autorisée.";
}

//Création de la BDD

$pseudo=htmlspecialchars($_POST['pseudo']);
$mot_de_passe=htmlspecialchars($_POST['mot_de_passe']);


$connexion->exec("INSERT INTO userdelete(pseudo,mot_de_passe)VALUES('$pseudo','$mot_de_passe')");

$connexion->close();
?>