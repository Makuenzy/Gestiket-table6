<?php
/* Connexion à une base ODBC avec l'invocation de pilote */
require_once('db_connect.php');

if (isset ($_POST['valider'])){

                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $profil = $_POST['profil'];
                $login = $_POST['login'];
                $password = $_POST['password'];
                $confirmer = $_POST['confirmer'];


                
                if ($password != $confirmer) {


                    header("Location: ./page-utilisateur.php");
                }
                else{
                $bdd->exec("INSERT INTO user (`ID`, `nom`, `prenom`, `login`, `password`, `profil`) VALUES (NULL, '$nom', '$prenom', '$login', '$password', '$profil')");
                    }

            }

            header("Location: listes-utilisateurs.php");
             
             

                   
?>