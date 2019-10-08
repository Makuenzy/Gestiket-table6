<?php

/* Connexion à une base ODBC avec l'invocation de pilote */
$bdd = 'mysql:dbname=ticket;host=localhost';
$user = 'PCRS';
$password = 'Pcrs15981993*';

  
try {
    $bdd = new PDO($bdd, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

if (isset ($_POST['valider'])){
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $login=$_POST['login'];
                $password=$_POST['password'];
                $profil=$_POST['profil'];
<<<<<<< HEAD:controleurs/nouveluser.php
                $confirmer=$_POST['confirmer']; 

                if ($password != $confirmer) {

                    header("location: ../Views/page-utilisateur.php");
                }else {
                    $bdd->exec("INSERT INTO user (`ID`, `nom`, `prenom`, `login`, `password`, `profil`) VALUES (NULL, '$nom', '$prenom', '$login', '$password', '$profil')");
                    header("location: ../Views/listes-utilisateurs.php");
                }
               
=======
                $bdd->exec("INSERT INTO user (`ID`, `nom`, `prenom`, `login`, `password`, `profil`) VALUES (NULL, '$nom', '$prenom', '$login', '$password', '$profil')");
>>>>>>> 25a53a98433edae6318b7cf38844852c56369c12:Views/nouveluser.php
            }

           header("Location: listes-utilisateurs.php");
            
?>