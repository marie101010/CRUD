<?php
session_start();
$id=$_SESSION['id'];
$pseudo = $_POST['pseudo'];
$mot_de_passe =$_POST['mot_de_passe'];
//var_dump($_POST);

// Connexion au serveur
$connexion = new PDO('mysql:host=localhost;dbname=insertion_sql;charset=utf8','msb','stagiaire');

//Requête
$select = $connexion->prepare('UPDATE userdelete SET pseudo=?, mot_de_passe=?  WHERE id=?;');
$select->bindParam(1,$pseudo);
$select->bindParam(2,$mot_de_passe);
$select->bindParam(3,$id);
$select->execute();

?>