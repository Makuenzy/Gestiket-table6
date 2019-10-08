<?php

//1-Recupération des Infos provenant du formulaire
 //2-validation des données
var_dump(($_POST));

if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['profil']) and !empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['confirmer'])){
    if($_POST['password'] != $_POST['confirmer']){

       header("Location: page-utilisateur.php?erreur=erreur confirmer");
    }

    else{
        //var_dump($_POST);
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $profil=$_POST['profil'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        //3-Traitement => Connexion dans une BD
        include_once('db_connect.php');
        exec("INSERT INTO 'user' (`ID`, `nom`, `prenom`, `login`, `password`, `profil`) VALUES (NULL, '$nom', '$prenom', '$login', '$password', '$profil')");

        header("Location: listes-utilisateurs.php");
    }
      
}else{
    header("Location: page-utilisateur.php?erreur= Remplissez tous les champs");  
}
*/

?>
